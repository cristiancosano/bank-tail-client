<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Ticket</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>



    <table>
        <tr>
            <td>
                <?php 
                    $image = file_get_contents('/images/bank-logo.png');
                    $imageData = base64_encode($image);  
                ?> 
                <img src="data:image/jpg;base64,<?php echo $imageData ?>" alt="" srcset="">
                <br>
                Welcome at <?php echo (new DateTime('NOW'))->format('d/m/yy H:i').'h'; ?>
            </td>
        </tr>
        <tr>
            <td>
                <span id="lblNewTicket">
                    Loading...
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-secondary btn-lg">
                    Generate new ticket
                </button>
            </td>
        </tr>
    </table>

    <script src="/js/libs/jquery.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-3.0.1.min.js"></script>
    <script src="/js/sockets/new-ticket.js"></script>

</body>

</html>