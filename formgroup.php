<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GROUP DETAILS</title>
    <style>
        .btnPrevious,
        .btnNext {
            display: inline-block;
            border: 1px solid #444348;
            border-radius: 3px;
            margin: 5px;
            /* color: #444348; */
            font-size: 14px;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <form method="post">
        <div class="b">
            <section class="vh-100" style="background-color: #ffffff;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            <p class="text-center h3 fw-bold mx-1 mx-md-4 mt-4">INSERT STUDENT DETAILS
                                            </p>
                                            <form class="mx-1 mx-md-4">
                                                <nav class="navbar">
                                                    <a class="sidebar-brand d-flex align-items-center justify-content-center"
                                                        href="#">
                                                        <div class="sidebar-brand-logo">
                                                            <img src="" class="logo-full">
                                                        </div>
                                                    </a>
                                                </nav>
                                                <!-- Page Wrapper -->
                                                <div id="wrapper">
                                                    <!-- Content Wrapper -->
                                                    <div id="content-wrapper" class="container d-flex flex-column">
                                                        <!-- Main Content -->
                                                        <div id="content">
                                                            <!-- Begin Page Content -->
                                                            <div class="container-fluid">
                                                                <div class="tabControl">
                                                                    <div class="container">
                                                                        <ul class="nav nav-pills nav-fill"
                                                                            id="pills-tab" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active"
                                                                                    id="pills-home-tab"
                                                                                    data-toggle="pill" href="#pills-1"
                                                                                    role="tab">1<sup>st</sup></a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link"
                                                                                    id="pills-profile-tab"
                                                                                    data-toggle="pill" href="#pills-2"
                                                                                    role="tab">2<sup>nd</sup></a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link"
                                                                                    id="pills-contact-tab"
                                                                                    data-toggle="pill" href="#pills-3"
                                                                                    role="tab">3<sup>rd</sup></a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link"
                                                                                    id="pills-contact-tab"
                                                                                    data-toggle="pill" href="#pills-4"
                                                                                    role="tab">4<sup>th</sup></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <br>
                                                                    <div class="tab-content" id="pills-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="pills-1" role="tabpanel"
                                                                            aria-labelledby="pills-home-tab">
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="e_name"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sname1">Student
                                                                                        Name</label>
                                                                                </div>
                                                                            </div>
                                                                             <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="srno1"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="srno1">Roll No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <select class="form-control"
                                                                                    name="sdiv1">
                                                                                    <option value="0">Division
                                                                                    </option>
                                                                                    <option value="1">TY DIV-1
                                                                                    </option>
                                                                                    <option value="2">TY DIV-2
                                                                                    </option>
                                                                                    <option value="3">TY DIV-3
                                                                                    </option>
                                                                                    <option value="4">TY DIV-4

                                                                                    </option>
                                                                                    <option value="5">TY DIV-5
                                                                                    </option>
                                                                                </select>
                                                                                <label class="form-label"
                                                                                    for="sdiv1">Select Division
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sphno1"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sphno1">Contact No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="email" name="semail1"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="semail1">Email Address
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                            <div class="col-6 col-sm-3" id="btnNext">
                                                                                <a
                                                                                    class="btn btn-primary btnNext">Next</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="pills-2"
                                                                            role="tabpanel"
                                                                            aria-labelledby="pills-profile-tab">
                                                                            <div class="tab-pane fade show active"
                                                                            id="pills-1" role="tabpanel"
                                                                            aria-labelledby="pills-home-tab">
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sname2"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sname2">Student
                                                                                        Name</label>
                                                                                </div>
                                                                            </div>
                                                                             <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="srno2"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="srno2">Roll No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <select class="form-control"
                                                                                    name="sdiv2">
                                                                                    <option value="0">Division
                                                                                    </option>
                                                                                    <option value="1">TY DIV-1
                                                                                    </option>
                                                                                    <option value="2">TY DIV-2
                                                                                    </option>
                                                                                    <option value="3">TY DIV-3
                                                                                    </option>
                                                                                    <option value="4">TY DIV-4

                                                                                    </option>
                                                                                    <option value="5">TY DIV-5
                                                                                    </option>
                                                                                </select>
                                                                                <label class="form-label"
                                                                                    for="sdiv2">Select Division
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sphno2"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sphno2">Contact No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="email" name="semail2"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="semail2">Email Address
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                           
                                                                        </div>
                                                                            <div class="navbuttons">
                                                                               
                                                                                <div class="col-6 col-sm-3"
                                                                                    id="btnNext">
                                                                                    <a
                                                                                        class="btn btn-primary btnNext">Next</a>
                                                                                </div>
                                                                                <div class="col-6 col-sm-3"
                                                                                id="btnPrevious">
                                                                                <a
                                                                                    class="btn btn-primary btnPrevious">Previous</a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="pills-3"
                                                                            role="tabpanel"
                                                                            aria-labelledby="pills-contact-tab">
                                                                            <div class="tab-pane fade show active"
                                                                            id="pills-1" role="tabpanel"
                                                                            aria-labelledby="pills-home-tab">
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sname3"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sname3">Student
                                                                                        Name</label>
                                                                                </div>
                                                                            </div>
                                                                             <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="srno3"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="srno3">Roll No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <select class="form-control"
                                                                                    name="sdiv3">
                                                                                    <option value="0">Division
                                                                                    </option>
                                                                                    <option value="1">TY DIV-1
                                                                                    </option>
                                                                                    <option value="2">TY DIV-2
                                                                                    </option>
                                                                                    <option value="3">TY DIV-3
                                                                                    </option>
                                                                                    <option value="4">TY DIV-4

                                                                                    </option>
                                                                                    <option value="5">TY DIV-5
                                                                                    </option>
                                                                                </select>
                                                                                <label class="form-label"
                                                                                    for="sdiv3">Select Division
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sphno3"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sphno3">Contact No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="email" name="semail3"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="semail3">Email Address
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                            
                                                                        </div>
                                                                            <div class="navbuttons">
                                                                             
                                                                                <div class="col-6 col-sm-3"
                                                                                    id="btnNext">
                                                                                    <a
                                                                                        class="btn btn-primary btnNext">Next</a>
                                                                                </div>
                                                                                <div class="col-6 col-sm-3"
                                                                                id="btnPrevious">
                                                                                <a
                                                                                    class="btn btn-primary btnPrevious">Previous</a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="pills-4"
                                                                            role="tabpanel"
                                                                            aria-labelledby="pills-contact-tab">
                                                                            <div class="tab-pane fade show active"
                                                                            id="pills-1" role="tabpanel"
                                                                            aria-labelledby="pills-home-tab">
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sname4"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sname4">Student
                                                                                        Name</label>
                                                                                </div>
                                                                            </div>
                                                                             <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="srno4"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="srno4">Roll No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <select class="form-control"
                                                                                    name="sdiv4">
                                                                                    <option value="0">Division
                                                                                    </option>
                                                                                    <option value="1">TY DIV-1
                                                                                    </option>
                                                                                    <option value="2">TY DIV-2
                                                                                    </option>
                                                                                    <option value="3">TY DIV-3
                                                                                    </option>
                                                                                    <option value="4">TY DIV-4

                                                                                    </option>
                                                                                    <option value="5">TY DIV-5
                                                                                    </option>
                                                                                </select>
                                                                                <label class="form-label"
                                                                                    for="sdiv4">Select Division
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="text" name="sphno4"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="sphno4">Contact No
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-row align-items-center mb-4">
                                                                                <div
                                                                                    class="form-outline flex-fill mb-0">
                                                                                    <input type="email" name="semail4"
                                                                                        class="form-control" />
                                                                                    <label class="form-label"
                                                                                        for="semail4">Email Address
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                            <div class="col-6 col-sm-3" id="btnNext">
                                                                                
                                                                                    
                                                                                    <input type="submit" value="Submit" class="btn btn-primary ">
                                                                            </div>
                                                                        </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Bootstrap -->

                                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                                    crossorigin="anonymous"></script>
                                                <script
                                                    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                                                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                                                    crossorigin="anonymous"></script>
                                                <script
                                                    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                                                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                                                    crossorigin="anonymous"></script>

                                                <script src="https://kit.fontawesome.com/1b59bc20c8.js"></script>

                                            </form>

                                        </div>
                                        <div
                                            class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="upload/img1.jpg" class="img-fluid"
                                                alt="Sample image">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <br>

    </form>
    <script>


        $('.btnNext').click(function () {
            $('.nav-pills .active').parent().next('li').find('a').trigger('click');
        });

        $('.btnPrevious').click(function () {
            $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
        });
    </script>

</body>

</html>