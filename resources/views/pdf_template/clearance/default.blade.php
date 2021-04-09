<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
        body {
            font-family: sans-serif;
            letter-spacing: 0.7px;
            font-size: 0.8em;
        }

        h1, h2, h3, h4, h5 {
            font-weight: 400;
            padding: 0;
            margin: 0;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            /* margin: 25px 0; */
            font-size: 0.7em;
            
            
            min-width: 400px;
            /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); */
            border-bottom: 1px solid #dddddd;
            
            
        }
        .styled-table thead tr {
            background-color: #ebebeb;
            color: #1d1d1d;
            text-align: left;
            /* font-weight: 600 !important; */
            
        }
        .styled-table th,
        .styled-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #eeeeee;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
            color: #2b2b2b;
            
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #F9F9F9;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="text-center">
        <h2>Report Header</h2>
        <br>
        <h4>
            <span>Republic of the Philippines</span><br>
            <span>Province of Bulacan</span><br>
            <span>Municipality of Marilao</span><br><br>
            <span>Barangay Sta. Rosa 1</span><br><br>
        </h4>
    </div>
    <h3>Resident Data Report</h3>
    <br>
    <table class="styled-table">
        
        <thead>
            <tr>
                <th>Name</th>
                <th>Purok</th>
                <th>Description</th>
                <th>Points</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dom</td>
                <td>6000</td>
                <td>Dom</td>
                <td>6000</td>
                 <td>Dom</td>
            </tr>
            <tr>
                <td>Badatom, Eunesis Paul Jr.</td>
                <td>5150</td>
                <td>Dom</td>
                <td>6000</td>
                 <td>Dom</td>
            </tr>
            <tr>
                <td>Badatom, Eubert Paul Jr.</td>
                <td>6000</td>
                <td>Dom</td>
                <td>6000</td>
                 <td>Dom</td>
            </tr>
            <tr >
                <td>Badatom, Eugene Paul Jr.</td>
                <td>5150</td>
                <td>Dom</td>
                <td>6000</td>
                 <td>Dom</td>
            </tr>
            <!-- and so on... -->
        </tbody>
    </table>
    
</body>
</html>