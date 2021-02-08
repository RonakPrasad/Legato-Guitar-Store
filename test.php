<?php
// Usage 1:
echo password_hash('rasmuslerdorf', PASSWORD_DEFAULT)."<br>";
// $2y$10$xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// For example:
// $2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a

// Usage 2:
$options = [
  'cost' => 11
];
echo password_hash('rasmuslerdorf', PASSWORD_BCRYPT)."\n";
?>