
main: pages/main/page.php pages/main/page.html pages/main/page.css pages/main/page.js pages/main/make.php 
	php pages/main/make.php

.PHONY: clean
clean:
  rm -rf build/*
