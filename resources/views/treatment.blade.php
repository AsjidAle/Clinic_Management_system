
@include('parts/header')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Treatment Form</title>
</head>
<br>
<br>
<br>
<body>
    <label for="patient_name">Patient Name:</label>
    <input type="text" name="patient_name">
    <form action="/doctortreatment" method="post">
        @csrf
        <label for="remark">Remark:</label>
        <textarea name="remark" id="remark" required rows="20" cols="50"></textarea>
        <br>
        <label for="medication">Medication:</label>
        <textarea name="medication" id="medication" required rows="20" cols="50"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

