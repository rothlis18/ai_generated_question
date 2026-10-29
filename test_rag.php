<?php
$ch = curl_init('http://localhost/ai_engine/benchmark_outputs/published/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$out = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo "HTTP Code: $code\n";
if ($code == 200) {
    echo "SUCCESS: Got " . strlen($out) . " bytes.\n";
} else {
    echo "FAILED.\n";
}
curl_close($ch);
