@extends('layouts.menuFooter')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
      <!-- gallery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />      <!-- font -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat|Courgette|Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
        <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
      <!-- bootsratp -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <!-- myCss -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <div class="container-fluid justify-content-center">
            <h2 class="row justify-content-md-center heading">{{$cookingEmployee->fname}}'s Info</h2>
            <div class="col middle">
                            <div class="col justify-content-center form-col">
                                    <form method="POST" action="/cooking_employee" class="custom-form">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="employeeName">ID</label>
                                                    <input type="text" name="fname" class="form-control" id="employeeName" value="{{$cookingEmployee->id}}" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="employeeName">First Name</label>
                                                    <input type="text" name="fname" class="form-control" id="employeeName" value="{{$cookingEmployee->fname}}" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="employeeLastName">Last Name</label>
                                                    <input type="text" name="lname" class="form-control" id="cMiddleName" value="{{$cookingEmployee->lname}}"readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="employeeEmail">email</label>
                                                    <input type="text" name="email" class="form-control" id="email" value="{{$cookingEmployee->email}}" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="employeePhone">Phone no</label>
                                                    <input type="text" name="phoneNo" class="form-control" id="phoneNo" value="{{$cookingEmployee->phoneNo}}"readonly>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="employeeFatherName">Father Name</label>
                                                                <input type="text" name="father_name" class="form-control" id="employeeFatherName" value="{{$cookingEmployee->father_name}}"readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="employeeMotherName">Mother Name</label>
                                                                <input type="text" name="mother_name" class="form-control" id="employeeMotherName" value="{{$cookingEmployee->mother_name}}"readonly>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="presentAddress">Present Address</label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="PHouseNo">House No</label>
                                                        <input type="number" name="PhouseNo" class="form-control" id="House no" value="{{$cookingEmployee->PhouseNo}}"readonly>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="Plocation">Location</label>
                                                        <input type="text" name="Plocation" class="form-control" id="Location" value="{{$cookingEmployee->Plocation}}"readonly>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                            <label for="Pstreet">Street</label>
                                                            <input type="text" name="Pstreet" class="form-control" id="Village/Street" value="{{$cookingEmployee->Pstreet}}"readonly>
                                                    </div>
                                                </div>
            
                                                <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">Thana</label>
                                                            <input type="text" name="Pthana" class="form-control" id="Thana" value="{{$cookingEmployee->Pthana}}"readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">District</label>
                                                            <input type="text" name="Pdistrict" class="form-control" id="District" value="{{$cookingEmployee->Pdistrict}}"readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                                <label for="inputState">Post Code</label>
                                                                <input type="number" name="Ppostcode" class="form-control" id="Post Code" value="{{$cookingEmployee->Ppostcode}}"readonly>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="permanentAddress">Permanent Address</label>
                                                    <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="PHouseNo">House No</label>
                                                                <input type="number" name="RhouseNo" class="form-control" id="House no" value="{{$cookingEmployee->RhouseNo}}"readonly>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="Plocation">Location</label>
                                                                <input type="text" name="Rlocation" class="form-control" id="Location" value="{{$cookingEmployee->Rlocation}}">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                    <label for="Pstreet">Street</label>
                                                                    <input type="text" name="Rstreet" class="form-control" id="Village/Street" value="{{$cookingEmployee->Rstreet}}"readonly>
                                                            </div>
                                                        </div>
                    
                                                        <div class="form-row">
                                                                <div class="form-group col-md-2">
                                                                    <label for="inputState">Thana</label>
                                                                    <input type="text" name="Rthana" class="form-control" id="Thana" value="{{$cookingEmployee->Rthana}}"readonly>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label for="inputState">District</label>
                                                                    <input type="text" name="Rdistrict" class="form-control" id="District" value="{{$cookingEmployee->Rdistrict}}"readonly>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                        <label for="inputState">Post Code</label>
                                                                        <input type="number" name="Rpostcode" class="form-control" id="Post Code" value="{{$cookingEmployee->Rpostcode}}"readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Date of Birth">Date of Birth</label>
                                                    <input class="form-control" name="dob" type="date" id="date-of-birth" value="{{$cookingEmployee->dob}}"readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">Job Title</label>
                                                    <input name="job_title" id="inputState" class="form-control"value="{{$cookingEmployee->job_title}}"readonly></input>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add employee</button>
                                        </form>
                            </div>
                    </div>
                </div>
            </div>
                    
    </div>
    <!-- Footer -->


    </body>
    
</html>