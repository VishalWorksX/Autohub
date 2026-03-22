<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        td>img {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }
    </style>
    <title>Title</title>
</head>

<body>

    <h1 class="display-5 my-5 text-center">Compare Cars in Autohub</h1>
    <div class="container">
        <div class="col-md-9 mx-auto">
            <table class="table">
                <tr class="bg-light">
                    <th>Select Car</th>
                    <th width="300px">
                       
                        <select  class="form-control" id="select1" onchange="item1(this.value)">
                            <option value="0">-- Select Anyone --</option>
                        </select>
                    </th>
                    <th width="300px">
                        <select  class="form-control" id="select2" onchange="item2(this.value)">
                            <option value="0">-- Select Anyone --</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Car Image</th>
                    <td>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                            id="img1" alt=" ">
                    </td>
                    <td>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                            id="img2" alt=" ">
                    </td>
                </tr>
                <tr>
                    <th>Car Price</th>
                    <td id="price1">N/A</td>
                    <td id="price2">N/A</td>
                </tr>
                <tr>
                    <th>Car Description</th>
                    <td id="desc1">N/A</td>
                    <td id="desc2">N/A</td>
                </tr>
                <tr>
                    <th>Car Brand</th>
                    <td id="brand1">N/A</td>
                    <td id="brand2">N/A</td>
                </tr>
                
                <tr>
                    <th>Fuel Type</th>
                    <td id="fuel1">N/A</td>
                    <td id="fuel2">N/A</td>
                </tr>

                <tr>
                    <th>Fuel tank capacity</th>
                    <td id="fcapacity1">N/A</td>
                    <td id="fcapacity2">N/A</td>
                </tr>

                <tr>
                    <th>Body type</th>
                    <td id="btype1">N/A</td>
                    <td id="btype2">N/A</td>
                </tr>

                <tr>
                    <th>Max power</th>
                    <td id="xpower1">N/A</td>
                    <td id="xpower2">N/A</td>
                </tr>

                <tr>
                    <th>NO. of cylinders</th>
                    <td id="cylinders1">N/A</td>
                    <td id="cylinders2">N/A</td>
                </tr>

                <tr>
                    <th>Seating capacity</th>
                    <td id="seating1">N/A</td>
                    <td id="seating2">N/A</td>
                </tr>

                <tr>
                    <th>Mileage</th>
                    <td id="mileage1">N/A</td>
                    <td id="mileage2">N/A</td>
                </tr>

                <tr>
                    <th>Max torque</th>
                    <td id="torque1">N/A</td>
                    <td id="torque2">N/A</td>
                </tr>
                <tr>
                    <th>engin</th>
                    <td id="engin1">N/A</td>
                    <td id="engin2">N/A</td>
                </tr>
            </table>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js "></script>
</body>

</html>

<script src="data.js"></script>
<script src="main.js"></script>
