<?php
header("Content-Type: application/json");

$host = 'localhost';
$dbname = 'disaster_plan';
$user = 'root';
$pass = ''; // XAMPPの初期設定なら空

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
  $stmt = $pdo->query("SELECT id, name, total_score, timeline_pdf FROM students");
  $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($students);
} catch (PDOException $e) {
  http_response_code(500);
  echo json_encode(["error" => $e->getMessage()]);
}
