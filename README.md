# jecrcwebsite

## JECRC Foundation website for NBA Criteria

This project is official JECRC Foundation website for NBA Criteria

# Installation

### Xampp Installation

-   Xampp install in your local computer(instructions for ubuntu)
    -   [Download Xampp](https://www.apachefriends.org/download.html)
    -   Follow these instructions:-(Assume you have downloaded it into __Download__ directory)
        -   Move into downloads dir.
            > $cd Downloads/
        -   change permission of installer
            > $sudo chmod +x xampp-linux-x64-7.x-installer.run
        -   run installer
            > $sudo ./xampp-linux-x64-7.x-installer.run
        -   follow the instructions given by xampp GUI.
        -   It will install xampp in __/opt/lampp/__
    -   start xampp server:
        > $sudo /opt/lampp/lampp start

### project installation

-   Clone repository in appropriate folder(In case of Xampp it is __htdocs__)
    > $cd /opt/lampp/htdocs  
    > $git clone <https://github.com/amritsrivastava/jecrcwebsite.git>
-   Now start your xampp server(follow above instructions)
-   Go to your favorite web browser and open project by:
    > localhost/jecrcwebsite/  

# contribution guidelines

-   Go into project directory
    > $cd jecrcwebsite/
-   create a new branch and checkout it
    > $ git checkout -b _branchname_  
-   Change files and commit them and then push to remote branch :
    > $git push origin _branchname_
-   go to github and make a pull request.

# Before you start work:

-   pull changes **from remote** in **master** branch and also  in your **own branch**
    > $ git pull origin master  
-   checkout your branch:-
    > $git checkout yourbranch  

# Some useful instructions(should be followed)

-   Bootstrap and font-awesome files are already included in project so just go and use them.
-   Never change any property of Bootstrap classes. Instead create your own new class   
-   Always specify your block of css. For example if you worked on footer css then write this:
    > /\* -----------------------footer start---------\*/
    >     your css here  
    > /\*------------------ footer end--------\*/

# Instructions for working on departments

-   All the index files of departmetns are present in the root directory from the department name like
    for cse department cse.php
-   Header and footer are same for all the pages.
-   Sidebar is diffrent for all the departments.
-   diffrent files of departments are present in /departments/[department_name]/ folder
-   write css for departments in their respective folder present in /departments/[department_name]/src/css/[department_name].css
