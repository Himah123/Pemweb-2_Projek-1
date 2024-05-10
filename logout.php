<?php
SESSION_start();
SESSION_destroy();

/// arahkan ke halaman login
header('Location: index.html');