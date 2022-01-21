<?php

if (isset($_GET['age'])) {
echo $_GET['age'];
}
else {
echo "Le parametre 'age' n'exite pas ";
}