# jecrcwebsite

## JECRC Foundation website for NBA Criteria

This project is official JECRC Foundation website for NBA Criteria

# Installation
### Xampp Installation
  * Xampp install in your local computer(instructions for ubuntu)
    * [Download Xampp](https://www.apachefriends.org/download.html)
    * Follow these instructions:-(Assume you have downloaded it into _*Download*_ directory)
        * Move into downloads dir.
          > $cd Downloads/
        * change permission of installer
          > $sudo chmod +x xampp-linux-x64-7.x-installer.run
        * run installer
          > $sudo ./xampp-linux-x64-7.x-installer.run
        * follow the instructions given by xampp GUI.
        * It will install xampp in _*/opt/lampp/*_
    *   start xampp server:
      > $sudo /opt/lampp/lampp start



### project installation
* Clone repository in appropriate folder(In case of Xampp it is _*htdocs*_)
> $cd /opt/lampp/htdocs  
> $git clone https://github.com/amritsrivastava/jecrcwebsite.git
* Now start your xampp server(follow above instructions)
* Go to your favorite web browser and open project by:
> localhost/jecrcwebsite/  

# contribution guidelines
* Go into project directory
>$cd jecrcwebsite/
* create a new branch and checkout it
> $ git checkout -b *branchname*  
* Change files and commit them and then push to remote branch :
> $git push origin *branchname*
* go to github and make a pull request.

# Some useful instructions(should be followed)
* Bootstrap and font-awesome files are already included in project so just go and use them.
* Never change any property of Bootstrap classes. Instead create your own new class   
* Always specify your block of css. For example if you worked on footer css then write this:
> /\* -----------------------footer start---------\*/
>     your css here  
> /\*------------------ footer end--------\*/

* if you are adding a part to webpage. Add your _*filename.php*_ in modules and import it in _*index.php*_:
> index.php  
> <?php include './modules/filename.php'; ?>
