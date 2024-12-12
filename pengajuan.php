<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - PENGAJUAN KENAIKAN PANGKAT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <!-- start sidebar -->
        <div class="sidebar">
            <div class="teks">
                <h1>PROFIL</h1>
            </div>

            <div class="sidebar-atas">
                <img src="icons/user.png" alt="">
                <h5>nama</h5>
                <h5>nip</h5>
            </div>

            <div class="sidebar-tengah">
                <img src="image/logopns.png" alt="">
            </div>

            <div class="sidebar-bawah">
                <a href="dashboardUser.php">Home</a>
                <a href="persyaratan.php">Persyaratan</a>
                <a href="pengajuan.php">Pengajuan Kenaikan</a>
            </div>

            <div class="logo">
                <img src="image/bkn.png" alt="">
                <img src="image/bpjs.png" alt="">
            </div>
        </div>
        <!-- end sidebar -->

        <div class="main-wrapper">
            <!-- start navbar -->
            <div class="navbar">
                <h1>PENGAJUAN KENAIKAN PANGKAT</h1>
                <button class="logout">Logout</button>
            </div>
            <!-- end navbar -->
            <!-- start content -->
            <div class="main">
                <div class="wrapper">
                    <div class="teks">
                        <p>Upload berkas anda dalam bentuk pdf</p>
                    </div>
                    <div class="upload-container">
                        <h2>Upload Your Files</h2>
                        <div class="upload-area" id="upload-area">
                            Drop your files here or click to select.
                        </div>
                        <input type="file" id="file-input" multiple style="display: none;">
                        <ul class="file-list" id="file-list"></ul>
                    </div>
                    <button class="submit">Submit</button>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>

    <script>
        const uploadArea = document.getElementById('upload-area');
        const fileInput = document.getElementById('file-input');
        const fileList = document.getElementById('file-list');

        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            handleFiles(e.dataTransfer.files);
        });

        uploadArea.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        function handleFiles(files) {
            fileList.innerHTML = '';
            Array.from(files).forEach(file => {
                if (file.type !== 'application/pdf') {
                    alert(`${file.name} is not a PDF file.`);
                    return;
                }

                const listItem = document.createElement('li');
                listItem.textContent = `Uploading: ${file.name}...`;
                fileList.appendChild(listItem);

                const formData = new FormData();
                formData.append('file', file);

                fetch('upload.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        listItem.textContent = `${file.name} uploaded successfully!`;
                    })
                    .catch(error => {
                        listItem.textContent = `${file.name} failed to upload.`;
                        console.error(error);
                    });
            });
        }
    </script>
</body>

</html>