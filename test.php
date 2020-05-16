<?php

file_put_contents('/var/log/ups-test.log', time() . ' - ' . json_encode($argv) . "\n", FILE_APPEND);