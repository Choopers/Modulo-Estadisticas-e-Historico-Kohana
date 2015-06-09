<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>

</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>