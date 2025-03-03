
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        table {
            margin-top: 20px;
        }
        th, td {
            vertical-align: middle;
        }
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center">Student Management System</h2>
                        <form id="studentForm" class="mt-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" id="age" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label">Grade</label>
                                <input type="text" id="grade" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="mt-5 text-center">Student List</h3>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Grade</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="studentTableBody">
                        <!-- Data will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

