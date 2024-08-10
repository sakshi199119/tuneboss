<?php
        // Initialize variables
        $name = $email = $phone = $message = "";
        $data_submitted = false;

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);
            $data_submitted = true;
        }
        ?>


<?php if ($data_submitted): ?>
        <div class="submitted-data">
            <h3>Submitted Data:</h3>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
        </div>
        <?php endif; ?>
    </div>
