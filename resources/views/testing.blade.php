<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three.js with Importmap</title>
    <script type="importmap">
    {
        "imports": {
            "three": "https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js",
            "OrbitControls": "https://cdn.jsdelivr.net/gh/mrdoob/three.js@r128/examples/jsm/controls/OrbitControls.js",
            "GLTFLoader": "https://cdn.jsdelivr.net/gh/mrdoob/three.js@r128/examples/jsm/loaders/GLTFLoader.js",
            "ARButton": "https://cdn.jsdelivr.net/gh/mrdoob/three.js@r128/examples/jsm/webxr/ARButton.js"
        }
    }
    </script>
</head>
<body>
    <canvas id="threejsCanvas"></canvas>

    <script type="module">
        import * as THREE from 'three';
        import { OrbitControls } from 'OrbitControls';
        import { GLTFLoader } from 'GLTFLoader';
        import { ARButton } from 'ARButton';

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('threejsCanvas'), antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setClearColor(0x87CEEB);
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.xr.enabled = true;
        renderer.xr.addEventListener('sessionstart', () => {
            renderer.setClearColor(0x000000, 0); // Transparent background
        });

        renderer.xr.addEventListener('sessionend', () => {
            renderer.setClearColor(0x87CEEB, 1); // Original color when exiting AR mode
        });
        document.body.appendChild(ARButton.createButton(renderer, { requiredFeatures: ["hit-test"] }));

        const loader = new GLTFLoader();
        var loadedModel;
        loader.load('{{asset("obj/scene.gltf")}}', function(gltf){
            gltf.scene.scale.set(20,20,20);
            scene.add(gltf.scene);
            loadedModel = gltf.scene;
            loadedModel.rotation.x = -Math.PI / 2;
            loadedModel.castShadow = true;
            loadedModel.receiveShadow = true;

            const topLight = new THREE.SpotLight(0xffffff, 2);
            topLight.position.set(loadedModel.position.x, loadedModel.position.y + 5, loadedModel.position.z); 
            topLight.castShadow = true;

            // Set spotlight parameters
            topLight.angle = Math.PI / 4;
            topLight.penumbra = 0.2; 
            topLight.decay = 2;
            topLight.distance = 100; 

            topLight.target = loadedModel; 

            scene.add(topLight);
            scene.add(topLight.target); 


            const vertexShader = `
                varying vec3 vNormal;
                varying vec3 vPosition;
                varying vec3 vLightDirection;

                void main() {
                    vNormal = normalize(normalMatrix * normal);
                    vPosition = vec3(modelMatrix * vec4(position, 1.0));
                    vLightDirection = normalize(vec3(1.0, 1.0, 1.0)); // Light direction
                    gl_Position = projectionMatrix * viewMatrix * vec4(vPosition, 1.0);
                }
            `;

            const fragmentShader = `
                uniform vec3 lightColor;
                uniform vec3 ambientColor;
                uniform vec3 viewPos; // Camera position
                varying vec3 vNormal;
                varying vec3 vPosition;

                void main() {
                    // Ambient
                    vec3 ambient = ambientColor;

                    // Diffuse
                    vec3 norm = normalize(vNormal);
                    vec3 lightDir = normalize(vec3(1.0, 1.0, 1.0)); // Light direction
                    float diff = max(dot(norm, lightDir), 0.0);
                    vec3 diffuse = lightColor * diff;

                    // Specular
                    vec3 viewDir = normalize(viewPos - vPosition);
                    vec3 reflectDir = reflect(-lightDir, norm); 
                    float spec = pow(max(dot(viewDir, reflectDir), 0.0), 32.0); // 32 is the shininess factor
                    vec3 specular = lightColor * spec;

                    // Combine results
                    vec3 result = (ambient + diffuse + specular);
                    gl_FragColor = vec4(result, 1.0);
                }
            `;

            // Create shader material
            const shaderMaterial = new THREE.ShaderMaterial({
                uniforms: {
                    lightColor: { value: new THREE.Color(1, 1, 1) }, // White light
                    ambientColor: { value: new THREE.Color(0.2, 0.2, 0.2) }, // Dim ambient light
                    viewPos: { value: camera.position }, // Camera position
                },
                vertexShader,
                fragmentShader,
                side: THREE.DoubleSide // Render both sides of the geometry
            });


            // Traverse the loaded model to apply the shader material to all meshes
            loadedModel.traverse((child) => {
                if (child.isMesh) {
                    child.material = shaderMaterial; // Assign the shader material
                }
            });
           
        }, undefined, function(error){
            console.error(error);
        });

        const light = new THREE.DirectionalLight(0xffffff, 2);
        light.position.set(5, 5, 5); 
        light.castShadow = true;
        scene.add(light);


        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5); 
        scene.add(ambientLight);
        

        const controls = new OrbitControls(camera, renderer.domElement);
        camera.position.z = 5;   

        const keys = {};
        
        window.addEventListener('keydown', (event) => {
            keys[event.key] = true;
        });

        window.addEventListener('keyup', (event) => {
            keys[event.key] = false;
        });

        let hitTestSourceRequested = null;
        let hitTestSource = null;
        renderer.setAnimationLoop(() => {
            if (!hitTestSourceRequested && renderer.xr.getSession()) {
                const session = renderer.xr.getSession();
                session.requestReferenceSpace('viewer').then((referenceSpace) => {
                    session.requestHitTestSource({ space: referenceSpace }).then((source) => {
                        hitTestSource = source;
                    });
                });
                session.addEventListener('end', () => {
                    hitTestSourceRequested = false;
                    hitTestSource = null;
                });
                hitTestSourceRequested = true;
            }

            // Call AR frame updates
            onARFrame();

            // Ensure the light follows the camera position
            light.position.copy(camera.position);

            // Model rotation controls based on key input
            if (loadedModel) {
                const moveSpeed = 0.02;
                if (keys['w']) loadedModel.rotation.x -= moveSpeed;
                if (keys['s']) loadedModel.rotation.x += moveSpeed;
                if (keys['a']) loadedModel.rotation.z -= moveSpeed;
                if (keys['d']) loadedModel.rotation.z += moveSpeed;
                if (keys['q']) loadedModel.rotation.y -= moveSpeed;
                if (keys['e']) loadedModel.rotation.y += moveSpeed;
            }

            // Update controls and render the scene
            controls.update();
            renderer.render(scene, camera);
        });

        function onARFrame() {
            if (!hitTestSource || (loadedModel && loadedModel.userData.placed)) return; // Skip if no hit test or model already placed

            const session = renderer.xr.getSession();
            if (session) {
                const frame = renderer.xr.getFrame();
                const referenceSpace = renderer.xr.getReferenceSpace();
                const hitTestResults = frame.getHitTestResults(hitTestSource);
                
                if (hitTestResults.length > 0) {
                    const hit = hitTestResults[0];
                    const hitPose = hit.getPose(referenceSpace);

                    // Place the model at the hit-test result position
                    if (loadedModel) {
                        loadedModel.position.set(
                            hitPose.transform.position.x,
                            hitPose.transform.position.y,
                            hitPose.transform.position.z
                        );
                        loadedModel.visible = true;
                    }
                } else {
                    // Hide the model if no hit-test result is available
                    if (loadedModel) loadedModel.visible = false;
                }
            }
        }


        window.addEventListener('resize', () => {
            const width = window.innerWidth;
            const height = window.innerHeight;
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        });

        document.body.addEventListener('click', () => {
            if (hitTestSource && loadedModel) {
                loadedModel.userData.placed = true; // Mark model as placed
                hitTestSourceRequested = false; // Stop further hit tests
            }
        });
    </script>
</body>
</html>
