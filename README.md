#f3 - dotcloud boilerplate

boilerplate for f3 ready to deploy on dotcloud.

[Install dotcloud CLI and setup](http://docs.dotcloud.com/firststeps/install/)

Git clone this repo to yourapp/

Edit dotcloud.yml with your specific stack if necessary. (default : php/mysql)

then:

	cd yourapp/
	dotcloud create yourapp
	#connect dir to dotcloud by answering Y to prompt
	dotcloud push


