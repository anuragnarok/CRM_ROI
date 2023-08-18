<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form with Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="col">
                <label> - Plans and Dawings - </label>        
        </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="file1">Floor Plans:</label>
                    <input type="file" class="form-control-file" id="file1" name="file1">
                </div>
                <div class="col">
                    <label for="file2">Project Plans</label>
                    <input type="file" class="form-control-file" id="file2" name="file2">
                </div>
            </div> <br> <hr>
            <div class="row mb-3">
                <div class="col">
                    <label for="file3">Brochure</label>
                    <input type="file" class="form-control-file" id="file3" name="file3">
                </div>
            </div> <br> <hr>
            <div class="row mb-3">
                <div class="col">
                    <label for="file4">Marketing Materials</label>
                    <input type="file" class="form-control-file" id="file4" name="file4">
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Upload Files</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
