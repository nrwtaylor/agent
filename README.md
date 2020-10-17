Agent
=====

A command-line connector to the Stack Agent Thing frame work.

Requirements
============

* nrwtaylor/stack-agent-thing
* Symfony Console

Installation
============

    composer require symfony/console
    composer require nrwtaylor/stack-agent-thing

    sudo touch agent
    sudo chmod +X agent

    sudo nano /etc/environment
    PATH="<existing path>:<path to agent folder>/agent"
    Then reboot


Usage
=====

    agent ping

PING | A message from this Identity pinged us. | Received 2 seconds ago. http://localhost:8000/thing/fb2a743b-5bfa-4546-a5cc-19add259420e/ping
PHP 3,074ms
1424 fb2a Added to stack.


Credits
=======

* Fabien Potencier for Symfony
