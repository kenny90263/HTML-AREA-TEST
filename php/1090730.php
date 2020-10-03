<?php 
header("Content-type:application/pdf");
// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=1090730.pdf");
// The PDF source is in original.pdf
readfile("uploads/1090730.pdf");
