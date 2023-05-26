<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Tasks</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
<style>
        body {
            background-image: url('/Objects/Images/activity.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .logo {
          max-width: 90px;
        }
        .navbar-nav .nav-link.btn:hover {
        border: 2px solid #0758d1;
        color: rgb(233, 231, 231);
        }
        .btn {
        background-color: #198754;
        border-color: #198754;
        }
        .btn:hover {
            background-color: #0d6e3f;
            border-color: #0d6e3f;
        }
        .farm-title img {
            width: 80px;
        }
        @media (max-width: 991px) {
            .navbar-nav .nav-link {
            font-size: 12px;
            padding: 6px;
            }
            .navbar-nav {
            float: right;
            }
            .farm-title {
                width: 230px;
                margin-left: -15px;
            }
            .logo img {
                width: 80px;
            }
        }
        .transparent-container {
          max-width: 700px;
          background-color: #00FF0080;
          padding-top: 10px;
          border-radius: 8px;
         
        }
        .footer {
          background-color: #28a745;
          color: #ffffff;
          padding: 20px 0;
        }
        .copyright {
          text-align: center;
        }
        /* Center the box */
        .center-box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        /* Green theme */
        .green-theme {
            background-color: #7ED957;
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
        }

        #success-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background-color: #66bb6a;
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            display: none;
        }
        .task-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .task-container.completed {
            text-decoration: line-through;
        }
        .task-container .task-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .task-container .task-time {
            margin-bottom: 10px;
        }
        .task-container .task-description {
            margin-bottom: 10px;
        }
        .progress-bar-container {
            margin-top: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 10px;
        }
        .progress-bar {
            height: 20px;
            background-color: #00b894; /* Green color */
        }
        .progress-bar::after {
        background-color: #0984e3; /* Blue color */
        }

                .task-image {
                    max-width: 100%;
                    height: auto;
                }
    </style>
    
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/Farm-main/Home-Feed.php">
                <img src="/Objects/Images/farm-logo-2.png" alt="Logo" class="logo">
              </a>
              <img src="/Objects/Images/farm-title.png" alt="Farm system title" class="farm-title">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto flex-row ">
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Home-Feed.php">BACK HOME</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Weather-forecast/weather.php">KNOW WEATHER</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Schedule-tasks/todays-report.php">TODAYS REPORT</a>
                </div>
              </div>
            </div>
          </nav>    
    </header>

    <br>
    

    <div class="container">
        <h1>Daily Activity</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="task-container">
                    <h2>Days</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="day-task1">
                                <label class="form-check-label" for="day-task1">
                                    <div class="task-title">Irrigation an Area</div>
                                    <div class="task-time">Time: 1 hour</div>
                                    <div class="task-description">A 200 acres farm area needed to be watered with precision.</div>
                                    <img src="/Objects/Images/irrigation.jpg" alt="Task 1" class="task-image">
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="day-task2">
                                <label class="form-check-label" for="day-task2">
                                    <div class="task-title">Task 2</div>
                                    <div class="task-time">Time: 30 minutes</div>
                                    <div class="task-description">Description of Task 2</div>
                                    <img src="image2.jpg" alt="Task 2" class="task-image">
                                </label>
                            </div>
                        </li>
                        <!-- Add more day tasks here -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="task-container">
                    <h2>Weeks</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="week-task1">
                                <label class="form-check-label" for="week-task1">
                                    <div class="task-title">Task 1</div>
                                    <div class="task-time">Time: 2 hours</div>
                                    <div class="task-description">Description of Task 1</div>
                                    <img src="image3.jpg" alt="Task 1" class="task-image">
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="week-task2">
                                <label class="form-check-label" for="week-task2">
                                    <div class="task-title">Task 2</div>
                                    <div class="task-time">Time: 1 hour</div>
                                    <div class="task-description">Description of Task 2</div>
                                    <img src="image4.jpg" alt="Task 2" class="task-image">
                                </label>
                            </div>
                        </li>
                        <!-- Add more week tasks here -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="task-container">
                    <h2>Months / Seasons</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="month-task1">
                                <label class="form-check-label" for="month-task1">
                                    <div class="task-title">Task 1</div>
                                    <div class="task-time">Time: 3 hours</div>
                                    <div class="task-description">Description of Task 1</div>
                                    <img src="image5.jpg" alt="Task 1" class="task-image">
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="month-task2">
                                <label class="form-check-label" for="month-task2">
                                    <div class="task-title">Task 2</div>
                                    <div class="task-time">Time: 2 hours</div>
                                    <div class="task-description">Description of Task 2</div>
                                    <img src="image6.jpg" alt="Task 2" class="task-image">
                                </label>
                            </div>
                        </li>
                        <!-- Add more month/season tasks here -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="progress-bar-container">
            <h2>Task Progress</h2>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div id="current-task"></div>
            <div id="next-task"></div>
        </div>
    </div>


    <script>
        const tasks = document.querySelectorAll('input[type="checkbox"]');
        const progressBar = document.querySelector('.progress-bar');
        const currentTask = document.querySelector('#current-task');
        const nextTask = document.querySelector('#next-task');

        let currentIndex = 0;
        let currentTaskIndex = 1;

        tasks.forEach(task => {
            task.addEventListener('change', function() {
                if (this.checked) {
                    this.parentElement.parentElement.classList.add('completed');
                    updateProgress();
                    nextTaskIndex();
                    showNextTask();
                } else {
                    this.parentElement.parentElement.classList.remove('completed');
                }
            });
        });

        function updateProgress() {
            const completedTasks = document.querySelectorAll('.task-container.completed').length;
            const totalTasks = document.querySelectorAll('.task-container').length;
            const progress = (completedTasks / totalTasks) * 100;
            progressBar.style.width = progress + '%';
            progressBar.setAttribute('aria-valuenow', progress);
        }

        function nextTaskIndex() {
            currentIndex++;
            if (currentIndex >= tasks.length) {
                currentIndex = 0;
            }
        }

        function showNextTask() {
            currentTask.textContent = `Current Task: Task ${currentTaskIndex}`;
            nextTask.textContent = `Next Task: Task ${currentTaskIndex + 1}`;
            currentTaskIndex++;
            if (currentTaskIndex > tasks.length) {
                currentTaskIndex = 1;
            }
        }

        showNextTask();
    </script>

<br>
<footer class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>Contact Us</h5>
          <p>Email: info@fmis.com</p>
          <p>Phone: 0655328428</p>
          <p>Address: FMIS TUDARco, Dar es salaam, Tanzania</p>
        </div>
        <div class="col-md-6">
          <h5>Feedback</h5>
          <form action="daily-activity.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="emailback" name="emailback" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-light" name="submit" >Submit</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <div class="container text-center">
        <span>&copy; <?php echo date("Y"); ?> Farm Organization. All rights reserved.</span>
    </div>
    <div class="copyright">
      &copy; COPYRIGHT - 2023    
    </div>
  </footer>

<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Replace with your XAMPP database username
$password = ""; // Replace with your XAMPP database password
$dbname = "fmis";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Check if the feedback form is submitted
if (isset($_POST['submit'])) {
    // Validate and sanitize the form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $emailback = isset($_POST['emailback']) ? $_POST['emailback'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Insert the data into the database
    $sql = "INSERT INTO feedback (name, emailback, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $emailback, $message);

    if ($stmt->execute()) {
        // Feedback submitted successfully
        echo "<div id='success-message' class='center-box'>
              <div class='green-theme'>
                  <h2>Feedback Submitted</h2>
                  <p>Thank you for your feedback!</p>
              </div>
          </div>";
        // Redirect to the desired page or display a success message
    } else {
        // Error occurred while executing the query
        echo "Error: " . $stmt->error;
        // Handle the error appropriately
    }
    

    $stmt->close();
}

$conn->close();

//it still give this error "Error: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)"
?>


</body>
</html>
