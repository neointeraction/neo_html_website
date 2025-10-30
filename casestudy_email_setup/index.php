<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Case Study Email</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        label { display: block; margin-bottom: 5px; }
        input[type="email"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message { margin-top: 20px; padding: 10px; border-radius: 4px; }
        .success { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Send Case Study Email</h2>
        <form action="send_casestudy_email.php" method="POST">
            <label for="recipient_email">Recipient Email:</label>
            <input type="email" id="recipient_email" name="recipient_email" required>

            <label for="casestudy_name">Case Study Name:</label>
            <input type="text" id="casestudy_name" name="casestudy_name" required>

            <label for="casestudy_link">Case Study Link:</label>
            <input type="text" id="casestudy_link" name="casestudy_link" required>

            <button type="submit" name="submit_casestudy_email">Send Email</button>
        </form>

        <hr>

        <h2>Generate Gmail API Token</h2>
        <p>Click the button below to generate or refresh your Gmail API token. This is required for sending emails via Gmail API.</p>
        <form action="generate_token.php" method="GET">
            <button type="submit">Generate Token</button>
        </form>

        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo '<div class="message success">Email sent successfully!</div>';
            } elseif ($_GET['status'] == 'error') {
                echo '<div class="message error">Failed to send email. Check server logs for details.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
