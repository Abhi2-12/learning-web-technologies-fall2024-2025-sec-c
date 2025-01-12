
<?php
// Include the model file where functions are defined
require_once '../Model/userModel.php';

// Fetch all employers
$employers = getEmployers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer List</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        /* Table Styling */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        td a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<h2>Employer List <br> <a href="employer_add.php">Add Employer</a></h2>

<table>
    <tr>
        <th>Employer ID</th>
        <th>Employer Name</th>
        <th>Company Name</th>
        <th>Contact Number</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php foreach ($employers as $employer) { ?>
        <tr>
            <td><?php echo $employer['employer_id']; ?></td>
            <td><?php echo $employer['employer_name']; ?></td>
            <td><?php echo $employer['company_name']; ?></td>
            <td><?php echo $employer['contact_no']; ?></td>
            <td><?php echo $employer['username']; ?></td>
            <td><?php echo $employer['password']; ?></td>
            <td>
                <a href="employer_update.php?employer_id=<?php echo $employer['employer_id']; ?>">Edit</a> | 
                <a href="employer_delete.php?employer_id=<?php echo $employer['employer_id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<div class="back-btn">
    <a href="../View/adminhome.php">Back</a>
</div>

</body>
</html>
