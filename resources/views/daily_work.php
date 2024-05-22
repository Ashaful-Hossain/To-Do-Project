<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #list1 .form-control {
            border-color: transparent;
        }

        #list1 .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }

        #list1 .select-input.form-control[readonly]:not([disabled]) {
            background-color: #fbfbfb;
        }
    </style>
</head>

<body>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">To Do App</h4>

                            <form action="{{url/list}}" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" @csrf>

                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="form1" class="form-control" />
                                        <label class="form-label" for="form1">Enter a task here</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Save</button>
                                </div>

                                <div class="col-12">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning">Get tasks</button>
                                </div>
                            </form>

                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Todo item</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Buy groceries for next week</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Renew car insurance</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sign up for online course</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div>
        <table>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Work List</th>
            </tr>
            <tr>
                <td>11</td>
                <td>babul</td>
                <td>mati cut</td>
            </tr>
        </table>
    </div> -->
</body>

</html> -->