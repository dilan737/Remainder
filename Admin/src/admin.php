<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMINDMATE</title>
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon.ico">
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon-16x16.png" >
    <link rel="icon" type="image/x-icon" href="image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="image/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="image/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="style/body_header_footer.css">

    <style>
    .container {
        display: flex;
        height: 100vh;  
    }

    .sidebar {
        width: 20%;
        background-color: rgba(255, 27, 61, 0.8); 
        color: white;
        padding: 20px;
        box-sizing: border-box;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        margin-bottom: 20px;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    .sidebar ul li a:hover {
        color: #D83F87; 

    }
    .main-content {
        width: 80%;
        padding: 40px;
        background-color: rgba(164, 179, 182, 0.822); 
        color: #2A1B3D; 
        box-sizing: border-box;
        overflow-y: auto;
    }
    .hidden {
        display: none;
    }
    .logout-button {
        padding: 10px 20px;
        background-color: #D83F87;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
            ransition: background-color 0.3s ease;
    }
    .logout-button:hover {
        background-color: #E98074;
    }
    </style>

</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo">
                <a href="admin.php">
                    <img src="image/Logo/RemindMate Logo.png" alt="Remindmate Logo" width="100px" height="100px" >
                </a>
            </div>
            <h1 id="brand-name">REMINDMATE</h1>
            <div class="profile-frame">
                <image src="image/profile_img/profile_pic.png" alt="prfile image" class="profile-pic">
            </div>
        </div>
        <div class="nav-bar">
        <a href="../../home/home.html">Home</a>|
            <a href="../../keshi/index.php">Reminder</a>
            <a href="../../shakya/contact.html">contact</a>|
            <a href="../../shakya/about.html">About Us</a>
        </div>
    </header>
    <div class="container">

        <div class="sidebar">
            <ul>
                <li><a href="#" onclick="showContent('dashboard')">Dashboard</a></li>
                <li><a href="#" onclick="showContent('admin-add')">Admins</a></li>
                <li><a href="#" onclick="showContent('user-add')">Users</a></li>
                <form action="logout.php" method="POST">
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </ul>
        </div>
    

        <div class="main-content" id="main-content">
            <h1>Welcome to REMINDMATE</h1>
            <p>Select a menu item to get started.</p>
        </div>
    </div>
    <script>
        function showContent(section) {
            const mainContent = document.getElementById("main-content");
        
            mainContent.innerHTML = '<p>Loading...</p>';
        
            const sectionMapping = {
                'dashboard': 'dashboard.php',
                'admin-add': 'Display.php',
                'user-add': 'user-dis.php',
            };
        
            const fileToLoad = sectionMapping[section];
        
            if (fileToLoad) {
                fetch(fileToLoad)
                    .then(response => response.text())
                    .then(data => {
                        mainContent.innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error loading content:', error);
                        mainContent.innerHTML = '<p>Sorry, an error occurred while loading the page.</p>';
                    });
            } else {
                mainContent.innerHTML = '<p>Section not found.</p>';
            }
        }
        </script>
    <footer>
        <h2>REMINDMATE</h2>

        <nav>
            <a href="contact.html">Contact</a> |
            <a href="privacy & policy.html">privacy & policy</a> |
            <a href="Terms&condition.html">Term & Condition</a>
        </nav>
        <p>&copy;2024 Remindmate.All rights reserved</p>

    </footer>

</body>
</html>
