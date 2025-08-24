<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 0;
    }
    .form-container {
        background: #fff;
        max-width: 400px;
        margin: 40px auto;
        padding: 30px 25px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 6px;
        color: #555;
        font-weight: 500;
    }
    input[type="text"] {
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 15px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background: #0078d4;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.2s;
    }
    input[type="submit"]:hover {
        background: #005fa3;
    }
    hr {
        margin-top: 30px;
    }
</style>

<div class="form-container">
    <h2>Delete Student</h2>
    <form method="POST" action="index.php?action=delete">
        <label for="id">Enter Student ID to Delete:</label>
        <input type="text" name="id" id="id" required>
        <input type="submit" value="Delete">
    </form>
</div>
<hr>