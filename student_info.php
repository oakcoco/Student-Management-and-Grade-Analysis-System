<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <aside class="sidebar" id="sidebar">
        <div class = "greetings">
             <h5>Goodmorning Teacher!</h5>
        </div>
        <nav class="sidebar-nav">
            <h6 class="nav-header"> MENU</h6>

            <a href="?page=dashboard" class="nav-item">&nbsp;&nbsp;Dashboard</a>
            <a href="?page=student_info" class="nav-item">&nbsp;&nbsp;Student Information Management</a>
            <a href="?page=student_grades" class="nav-item">&nbsp;&nbsp;Student Grade Management</a>
        </nav>
        <div class = "logout">
            &nbsp;&nbsp;<a href="config/logout.php"class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Log Out</a>
        </div>
    </aside>
    
    <main class = "main-content">
        <div class = "container-fluid">
            <h4 class="mb-4 fw-semibold">Student Information Management <br><br></h4>
                <div class="card top-card-container">
                    <div class="row mb-3 g-2 align-items-center">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary">Show All
                            </button>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-0" placeholder="Search students...">
                            </div>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option selected disabled>Sort by</option>
                                <option value="name">Name (Alphabetical)</option>
                                <option value="id">Student ID (Specific)</option>
                                <option value="grade">Average Grade (Ascending)</option>
                                <option value="grade">Average Grade (Descending)</option>
                            </select>
                        </div>
                    </div>
                </div>
            
            <div class="student-info-card">

                
                <div class="card student-container">
                    <div class="card-body">

                        <!-- put +Add Student button -->
                        <div class="title-side">
                            <h6 class="card-title mb-4"><br>My Students:</h6>

                        </div>

                        <div class="d-flex align-items-center mb-3 p-3 border rounded">
                            
                            <div class="me-3">
                                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="bi bi-person-fill text-white fs-4"></i>
                                </div>
                            </div>
                            
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Junel, Dimatibag G.</div>
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="bi bi-eye"></i> View
                                </button>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit Information
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete Student
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>