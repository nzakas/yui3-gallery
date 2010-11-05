<?php
header("Content-type: text/event-stream");
?>
event: foo
data: bar
<?php flush()?>

data: hello
