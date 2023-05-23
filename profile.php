<?php
require('db.php');
$query = "SELECT fname FROM users WHERE email='" . $_SESSION['mail']. "'";
$result = mysqli_query($conn,$query);
while($row = $result->fetch_assoc()) {
$fname = $row['fname'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />



    <title>SecureDoc</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    
    <style>
        .navbar .nav-item i {
            font-size: 18px;
        }

        .navbar .dropdown-item i {
            font-size: 16px;
            min-width: 22px;
        }

        .navbar .dropdown-menu {
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar .navbar-nav .dropdown-menu a {
            padding: 8px 20px;
            line-height: normal;
        }

        .navbar .navbar-form {
            border: none;
        }

        .navbar .navbar-form-wrapper {
            padding: 0 15px;
        }

        .navbar .login-form label {
            color: #888;
            font-weight: normal;
        }

        .navbar .dropdown-menu.login-form {
            width: 280px;
            padding: 20px;
            left: auto;
            right: 0;
            font-size: 14px;
        }

        .navbar .navbar-nav .dropdown-menu.login-form a {
            padding: 0 !important;
            color: #5c6ac4;
            font-weight: normal;
        }

        .navbar .navbar-nav .dropdown-menu.login-form a:hover {
            text-decoration: underline;
        }

        .navbar .dropdown-menu.login-form .checkbox-inline {
            margin-top: 10px;
        }

        @media (min-width: 1200px) {
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }

        @media (max-width: 768px) {
            .navbar .dropdown-menu.login-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }

            .navbar .form-inline {
                display: block;
            }

            .navbar .input-group {
                width: 100%;
            }

            .navbar .navbar-nav .btn-primary,
            .navbar .navbar-nav .btn-primary:active {
                display: block;
            }
        }


        .hero_area::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 0%;
            height: 88%;
            background-image: url(../images/hero-bg2.png);
            background-size: cover;
            background-position: left bottom;
            background-repeat: no-repeat;
        }

        .upload-area {
            display: flex;
            text-align: left;
            width: 100%;
            line-height: 70px;
            background-color: rgba(0, 153, 255, 0.05);
            border-radius: 8px;
            flex-direction: column;
            align-items: stretch;
            align-content: center;
            flex-wrap: wrap;
        }

        .upload {
            background-color: rgb(219 200 0);
            border: 1px solid rgba(0, 153, 255);
            cursor: pointer;
            color: white;
            outline: none;
            margin: auto;
            width: 50%;
            padding: 10px;
            height: 7vh;
            display: flex;
            width: 17%;
            padding: 10px;
            align-content: center;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
            flex-direction: row;
        }

        .upload:active {
            border-color: white;
        }

        .progress-container {
            display: inline-block;
            width: 65%;
            border: 2px solid rgba(0, 153, 255);
            height: 73px;
            position: relative;
            top: 13px;
            padding: 2px;
        }

        .progress {
            width: 0%;
            background-color: rgba(0, 153, 255);
            height: 100%;
            transition-duration: .3s;
        }

        .percent {
            display: inline-block;
            margin-left: 20px;
        }

        .controls {
            float: right;
            margin: auto;
            margin-left: 0;
        }

        .pause,
        .resume,
        .cancel {
            background-color: rgba(0, 153, 255);
            fill: white;
            padding: 5px;
            margin: 2px;
            margin-top: 18px;
            border-radius: 50%;
            cursor: pointer;
        }

        .resume {
            display: none;
        }

        .all-files {
            text-align: left;
            padding: 20px;
        }

        h2 {
            margin-left: 25px;
            color: rgba(0, 153, 255);
        }

        .all-files ul {
            position: relative;
            left: -15px;
        }

        .all-files ul li {
            list-style: none;
            background-color: rgba(0, 153, 255);
            display: inline-block;
            padding: 10px;
            padding-right: 45px;
            color: white;
            width: 300px;
            border-radius: 3px;
            margin: 5px;
            cursor: default;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            position: relative;
        }

        .all-files ul li svg {
            fill: white;
            position: absolute;
            right: 10px;
            top: 7px;
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        .expand-container {
            width: 100px;
            border-radius: 4px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border: 1px solid rgba(0, 153, 255, 0.2);
            background-color: white;
            position: absolute;
            height: 75px;
            display: none;
        }

        .expand-container ul li {
            list-style: none;
            font-size: 14px;
            text-align: left;
            margin: 4px;
            margin-left: 5px;
            color: rgba(0, 153, 255);
            position: relative;
            left: -40px;
            top: -10px;
            cursor: pointer;
        }

        .loader {
            animation: rotate 1.5s linear infinite;
            width: 60px;
            margin-top: 7px;
            margin-left: 20px;
            display: none;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }


        /* .navbar-brand img {
    height: 6vh;
    width: 73px;
} */
    </style>
</head>

<body>

    <body>
        <body class="sub_page">
            <div class="hero_area ">
              <!-- header section strats -->
              <header class="header_section">
                <div class="container-fluid">
                  <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
                      <img src="images/logo.png" alt="">
                    </a>
                    <div class="" id="">
                      <div class="User_option">
                        <form class="form-inline my-2  mb-3 mb-lg-0">
                         
                        </form>
                      </div>
          
                      
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle d-flex align-items-center hidden-arrow"
                          href="#"
                          id="navbarDropdownMenuAvatar"
                          role="button"
                          data-mdb-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <img
                            src="images\2.jpg"
                            class="rounded-circle"
                            height="25"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                            style="height: 5vh;"
                          />
                        </a>
                        <ul
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="navbarDropdownMenuAvatar"
                        >
                         
                          <li>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </header>
              <!-- end header section -->
            </div>



        <h1 style="display: flex;align-items: center;justify-content: center; font-weight: bold;"><?php echo $fname?>'s Doc</h1>
        <div class="upload-area">
            <div class="progress-container">
                <div class="progress"></div>
            </div>
            <div class="percent">0%</div>
            <div class="controls">
                <svg class="pause" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                </svg>
                <svg class="resume" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path
                        d="M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18c.62-.39.62-1.29 0-1.69L9.54 5.98C8.87 5.55 8 6.03 8 6.82z" />
                </svg>
                <svg class="cancel" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                </svg>
            </div>
            <input type="file" class="hidden-upload-btn" style="display: none;">
        </div>
        <button class="upload">Upload</button>
        <div class="all-files">
            <h2>Videos</h2>
            <ul id="video"></ul>
            <h2>Audios</h2>
            <ul id="audio"></ul>
            <h2>Images</h2>
            <ul id="image"></ul>
        </div>
        <div class="expand-container" data-value="0">
            <ul>
                <li onclick="openFile(this)">Open</li>
                <li onclick="downloadFile(this)">Download</li>
                <li onclick="deleteFile(this)">Delete</li>
            </ul>
            <!-- Preloader image -->
            <img class="loader" src="https://aux.iconspalace.com/uploads/11080764221104328263.png" alt="">
        </div>

        <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
        <!-- firebase sdk -->
        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
        <script src="script.js"></script>
        <script>// For Firebase JS SDK v7.20.0 and later, measurementId is optional
            const firebaseConfig = {
                apiKey: "AIzaSyC3MIN64hy_oTQfQWUHl0lID-CJkIfci0M",
                authDomain: "yt-project-a29f8.firebaseapp.com",
                projectId: "yt-project-a29f8",
                storageBucket: "yt-project-a29f8.appspot.com",
                messagingSenderId: "159898773748",
                appId: "1:159898773748:web:2985334de4f06ff73356a1",
                measurementId: "G-DLWR9M5SJC"
            };
            firebase.initializeApp(firebaseConfig);
            // get dom in variables
            var upload = document.getElementsByClassName('upload')[0];
            var hiddenBtn = document.getElementsByClassName('hidden-upload-btn')[0];
            var progress = document.getElementsByClassName('progress')[0];
            var percent = document.getElementsByClassName('percent')[0];
            var pause = document.getElementsByClassName('pause')[0];
            var resume = document.getElementsByClassName('resume')[0];
            var cancel = document.getElementsByClassName('cancel')[0];

            // create function for select a file
            upload.onclick = function () {
                hiddenBtn.click();
            }

            // also store files path in localstorage or in database for further use
            if (!localStorage.getItem("uploaded-metadata")) {
                var metadata = '[]';
                localStorage.setItem('uploaded-metadata', metadata)
            }

            // get selected file and upload function
            hiddenBtn.onchange = function () {
                // get file
                var file = hiddenBtn.files[0];
                // change file name so cannot overwrite
                var name = file.name.split('.').shift() + Math.floor(Math.random() * 10) + 10 + '.' + file.name.split('.').pop();
                var type = file.type.split('/')[0];
                var path = type + '/' + name;
                // now upload
                var storageRef = firebase.storage().ref(path);
                var uploadTask = storageRef.put(file);

                pause.onclick = function () {
                    uploadTask.pause();
                    resume.style.display = 'inline-block';
                    pause.style.display = 'none';
                }
                resume.onclick = function () {
                    uploadTask.resume();
                    resume.style.display = 'none';
                    pause.style.display = 'inline-block';
                }
                cancel.onclick = function () {
                    uploadTask.cancel();
                    progress.style.width = '0%';
                    percent.innerHTML = '0%';
                }

                upload.disabled = true;
                percent.innerHTML = '0%';

                // get progressbar
                uploadTask.on('state_changed',
                    (snapshot) => {
                        var progressValue = String((snapshot.bytesTransferred / snapshot.totalBytes) * 100).split('.')[0];
                        progress.style.width = progressValue + '%';
                        percent.innerHTML = progressValue + '%';
                    },
                    (error) => {
                        console.log(error)
                    },
                    () => {
                        // on successful upload
                        var metadata = JSON.parse(localStorage.getItem('uploaded-metadata'));
                        metadata.unshift(path);
                        localStorage.setItem("uploaded-metadata", JSON.stringify(metadata));
                        percent.innerHTML = 'DONE';
                        upload.disabled = false;
                        hiddenBtn.value = null;
                        // also refresh list on new upload
                        showFilesList();
                    }
                )
            }

            var expandContainer = document.getElementsByClassName('expand-container')[0];
            var expandContainerUl = document.querySelector('.expand-container ul');
            var loader = document.getElementsByClassName('loader')[0];

            window.onload = showFilesList;
            // make a function to show all files list
            function showFilesList() {
                // get data from localstorage
                var data = JSON.parse(localStorage.getItem('uploaded-metadata'));
                // refresh all files on function reload
                document.getElementById('video').innerHTML = '';
                document.getElementById('audio').innerHTML = '';
                document.getElementById('image').innerHTML = '';
                for (var i = 0; i < data.length; i++) {
                    var folder_name = data[i].split('/')[0];
                    var file_name = data[i].split('/')[1];
                    var path = data[i];
                    if (folder_name == 'video') {
                        document.getElementById('video').innerHTML += `
                <li data-name="${path}">
                    <span>${file_name}</span>
                    <svg onclick="expand(this)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
                </li>
                `;
                    } else if (folder_name == 'audio') {
                        document.getElementById('audio').innerHTML += `
                <li data-name="${path}">
                    <span>${file_name}</span>
                    <svg onclick="expand(this)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
                </li>
                `;
                    } else {
                        document.getElementById('image').innerHTML += `
                <li data-name="${path}">
                    <span>${file_name}</span>
                    <svg onclick="expand(this)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
                </li>
                `;
                    }
                }
            }

            // now make expand function to open more info
            function expand(v) {
                var path = v.parentElement.getAttribute('data-name');
                var click_position = v.getBoundingClientRect();
                if (expandContainer.getAttribute('data-value') == '0') {
                    expandContainer.style.display = 'block';
                    expandContainerUl.style.display = 'block';
                    loader.style.display = 'none';
                    expandContainer.style.left = (click_position.left + window.scrollX) - 85 + 'px';
                    expandContainer.style.top = (click_position.top + window.scrollY) + 25 + 'px';
                    expandContainer.setAttribute('data-value', '1');
                    expandContainerUl.setAttribute('data-file-name', path);
                    v.setAttribute('id', 'temp-id');
                    v.setAttribute('onclick', '');
                }
            }

            // now run shrink() function anywhere click
            document.addEventListener('mouseup', function (v) {
                if (!expandContainer.contains(v.target)) {
                    shrink();
                }
            });

            // hide that container
            function shrink() {
                expandContainer.style.display = 'none';
                expandContainer.setAttribute('data-value', '0');
                setTimeout(function () {
                    try {
                        var temp_id = document.getElementById('temp-id');
                        temp_id.setAttribute('onclick', 'expand(this)');
                        temp_id.setAttribute('id', '')
                    } catch { }
                }, 100);
            }

            // now open file
            function openFile(v) {
                var path = v.parentElement.getAttribute('data-file-name');
                var storageRef = firebase.storage().ref(path);
                expandContainerUl.style.display = 'none';
                loader.style.display = 'block';
                storageRef.getDownloadURL()
                    .then((url) => {
                        var a = document.createElement('a');
                        a.href = url;
                        a.target = '_blank';
                        a.click();
                        shrink();
                    })
                    .catch((error) => {
                        // if any error
                        console.log(error);
                    })
            }

            // now download file
            function downloadFile(v) {
                var path = v.parentElement.getAttribute('data-file-name');
                var storageRef = firebase.storage().ref(path);
                expandContainerUl.style.display = 'none';
                loader.style.display = 'block';
                storageRef.getDownloadURL()
                    .then((url) => {
                        var xhr = new XMLHttpRequest();
                        xhr.responseType = 'blob';
                        xhr.onload = function () {
                            var blob = xhr.response;
                            var url = window.URL.createObjectURL(blob);
                            var a = document.createElement('a');
                            a.href = url;
                            a.target = '_blank';
                            a.download = path.split('/')[1];
                            a.click();
                        };
                        // get progress
                        xhr.addEventListener('progress', function (event) {
                            var progressValue = String((event.loaded / event.total) * 100).split('.')[0];
                            progress.style.width = progressValue + '%';
                            percent.innerHTML = progressValue + '%';
                        })
                        xhr.open('GET', url);
                        xhr.send();
                        document.documentElement.scrollTop = 0;
                        shrink();
                    })
                    .catch((error) => {
                        // if any error
                        console.log(error);
                    })
            }

            // now delete file
            function deleteFile(v) {
                var path = v.parentElement.getAttribute('data-file-name');
                var storageRef = firebase.storage().ref(path);
                // get data from localstorage
                var metadata = JSON.parse(localStorage.getItem('uploaded-metadata'));
                var index = metadata.indexOf(path);
                expandContainerUl.style.display = 'none';
                loader.style.display = 'block';
                storageRef.delete().then(() => {
                    if (index > -1) {
                        // remove the path index and again save in localstorage
                        metadata.splice(index, 1);
                        localStorage.setItem('uploaded-metadata', JSON.stringify(metadata));
                    }
                    // show new list after remove
                    showFilesList();
                    shrink();
                }).catch((error) => {
                    console.log(error);
                })
            }</script>

    </body>

</html>
