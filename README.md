FirePHP on Dotcloud Demo
========================

This demo shows how to use [FirePHP 1.0](http://www.firephp.org/) in an application deployed to [Dotcloud](http://www.dotcloud.com/).


Instructions
============

**NOTE: Before you use this in a live application see security note below!**

  1. Create an account at [http://www.dotcloud.com/](http://www.dotcloud.com/).
  2. Deploy this demo app:

         dotcloud create firephptest
         dotcloud deploy --type php firephptest.www
         dotcloud push firephptest.www ./
         
  3. Install [DeveloperCompanion](http://developercompanion.com/) to use as a _FirePHP_ client.
  4. Launch _DeveloperCompanion_ using the icon in the browser status bar.
  5. Create a new workspace using the _Hostname_ of the deployed app from the command line as the _Homepage URL_ in _DeveloperCompanion_ and click _Add Workspace_ (e.g. `http://www.firephptest.dotcloud.com/`).
  6. When the workspace has launched click on the _URL_ shown to launch the app and log a test message.
  7. Double-click on the request that appeared in the workspace.
  8. When the request inspector has launched click on the _File_ icon next to the `Hello World` message to see the live source code from the server.

For complete FirePHP API documentation and support see: [http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/)  

Coming soon: Live editing of remote source code!


IMPORTANT FOR SECURITY!
=======================

When you use this code or _FirePHP 1.0_ in general in your application make sure you update:

  * The [INSIGHT_IPS](https://github.com/cadorn/firephp-dotcloud/blob/master/lib/bootstrap.php#L7) constant by setting it to a comma separated list of _IP addresses_ allowed to connect to FirePHP.
  * The [INSIGHT_AUTHKEYS](https://github.com/cadorn/firephp-dotcloud/blob/master/lib/bootstrap.php#L8) constant by setting it to a comma separated list of _client authorization keys_ allowed to connect to FirePHP. Authorization keys are issued when a user creates a new workspace in _DeveloperCompanion_.

See [FirePHP Install Documentation](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/Install/) for more information.

NOTE: This demo allows all IPs and authorization keys only to provide a configurationless demo.


Limitations
===========

At this time FirePHP will only work with **single instance** apps. Multi-instance apps will be supported soon once debugging data is stored in _memcache_ instead of _temporary files_.


Documentation License
=====================

[Creative Commons Attribution-NonCommercial-ShareAlike 3.0](http://creativecommons.org/licenses/by-nc-sa/3.0/)

Copyright (c) 2011+ [Christoph Dorn](http://www.christophdorn.com/)


Code License
============

[MIT License](http://www.opensource.org/licenses/mit-license.php)

Copyright (c) 2011+ [Christoph Dorn](http://www.christophdorn.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
