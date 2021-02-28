Trait Basic for ontime

The OnTime framework is designed to be modular, scalable and comprehensive, so that each new feature integrates without difficulty and maintains a unique class definition (OnTime) and all "additional classes" are "trait" that enrich it, in such a way that an integrated system is obtained, not separate programs which do not necessarily have to behave correctly together.
This trait is designed, to create and update basic content, the basic content is a simple 2 column table the code and the related value, the onl y validation is unique code


Installation in test environment:

1.- Copy all the files in the directory where was instaled ontrime core

2.- With the browser of your preference, locate the directory and enter it

3.- Execute the OntimeInstallerBasic.php file

4.- When executing the file,  the files where moved and the required environment was created

Recommendations:

If you know how to create a subdomain that points to the "demo" directory, it is more comfortable and realistic.

After install

When installing, the necessary environment is defined to define access security, I create a User called "Admin" and that his password is "OT2021Free", this environment left the class prepared for the control of Groups

Basic content is for simple tables, each table can have access dor anonimous user, public user, group and user, to can create content must hace proper level, can have user that create, and user that update data


mario.carrocera@hotmail.com
**********+++++++++++
Basic Table Demo
**********+++++++++++

**********
Create Class
**********

basic content exist
**********+++++++++++
Conecting like admin
**********+++++++++++

Connect('admin','OT2021Free')
Connected!!!

**********+++++++++++
Create Demostration user & groups (if installed)
**********+++++++++++

**********
Features with basic content
**********

**********
Show
**********+

ShwFtrBsc()
0D.- usr=>(Users)Users Feature
0D.- grp=>(Groups)Groups Feature
0D.- basic=>(Groups)Groups Feature
**********
Create
**********+

CrtFtrBsc('Basic')
C0010M012.-Not autorized

CrtFtrBsc('Non')
C0010M012.-Not autorized

CrtFtrBsc('grp')
C0010M007.-Record exist

CrtFtrBsc('usr')
C0010M007.-Record exist

**********
Show
**********+

ShwFtrBsc()
0D.- usr=>(Users)Users Feature
0D.- grp=>(Groups)Groups Feature
0D.- basic=>(Groups)Groups Feature
**********
Basic Content
**********

**********
Show
**********+

ShwBscIn('Basic')
0D.- index=>Main index
0D.- first=>My First Content
**********
Add
**********+

AddCntIn('first','My First Content','Basix')
C0010M012.-Not autorized

AddCntIn('first','My First Content','basic')
C0010M007.-Record exist

AddCntIn('Color','names in spanish and english','basic')
Added!!!

**********
Show
**********+

ShwBscIn('basic')
0D.- index=>Main index
0D.- first=>My First Content
0D.- Color=>names in spanish and english
**********
Data Basic Content
**********

**********
Show
**********+

ShwCntIn('Color','basic')
Empty
**********
Insert
**********+

InsCntIn('Rojo','Red','Color','basic')
Added!!!

InsCntIn('Naranja',Strange Yellow,'Color','basic')
Added!!!

InsCntIn('Moraido',Purple,'Color','basic')
Added!!!

**********
Show
**********+

ShwCntIn('Color','basic')
0D.- Rojo=>Red
0D.- Naranja=>Strange Yellow
0D.- Moraido=>Purple
**********
Upsert
**********+

UpnCntIn('Naranja','orange','Color','basic')
Done!!!

UpnCntIn('Amarillo','Yellow','Color','basic')
Done!!!

**********
Show
**********+

ShwCntIn('Color','basic')
0D.- Rojo=>Red
0D.- Naranja=>orange
0D.- Moraido=>Purple
0D.- Amarillo=>Yellow
**********
Update
**********+

UpnCntIn('Naranja','Orange','Color','basic')
Done!!!

**********
Show
**********+

ShwCntIn('Color','basic')
0D.- Rojo=>Red
0D.- Naranja=>Orange
0D.- Moraido=>Purple
0D.- Amarillo=>Yellow
**********
Delete
**********+

DltCntIn('Moraido','Color','basic')
Done!!!

**********
Show
**********+

ShwCntIn('Color','basic')
0D.- Rojo=>Red
0D.- Naranja=>Orange
0D.- Amarillo=>Yellow
**********
Safety for Data Basic Content
**********

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
**********
Add Anonimus user read
**********+

AnnBscInAdd('Color','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- Anonimus=>Allways avaible for read
**********
Add Public (conected) user read
**********+

PblBscInAdd('Color','basic')
C0010M038.-Access grant to 'Anonimus' nor tequiered

**********
Remove Anonimus user read
**********+

AnnBscInRmv('Color','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
**********
Add Public (conected) user read
**********+

PblBscInAdd('Color','basic') **********
Add Anonimus user read
**********+

AnnBscInAdd('Color','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- Public=>Online avaible for read
1.- 3 :
__________1D.- Anonimus=>Allways avaible for read
**********
Add user level
**********+

UsrBscInAdd('Color','DEMO','change','basic')
Anonimus User Allow read!!!

UsrBscInAdd('Color','Demo','update','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- DEMO=>change (user)
1.- 3 :
__________1D.- Demo=>update (user)
1.- 4 :
__________1D.- Public=>Online avaible for read
1.- 5 :
__________1D.- Anonimus=>Allways avaible for read
**********
Add Group level
**********+

GrpBscInAdd('Color','Everyone','change','basic')
Anonimus User Allow read!!!

GrpBscInAdd('Color','AdminGroups','update','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- DEMO=>change (user)
1.- 3 :
__________1D.- Demo=>update (user)
1.- 4 :
__________1D.- Everyone=>change (group)
1.- 5 :
__________1D.- AdminGroups=>update (group)
1.- 6 :
__________1D.- Public=>Online avaible for read
1.- 7 :
__________1D.- Anonimus=>Allways avaible for read
**********
change user level
**********+

UsrBscInChg('Color','DEMO','update','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- DEMO=>update (user)
1.- 3 :
__________1D.- Demo=>update (user)
1.- 4 :
__________1D.- Everyone=>change (group)
1.- 5 :
__________1D.- AdminGroups=>update (group)
1.- 6 :
__________1D.- Public=>Online avaible for read
1.- 7 :
__________1D.- Anonimus=>Allways avaible for read
**********
change Group level
**********+

GrpBscInChg('Color','AdminGroups','change','basic')
Anonimus User Allow read!!!

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- DEMO=>update (user)
1.- 3 :
__________1D.- Demo=>update (user)
1.- 4 :
__________1D.- Everyone=>change (group)
1.- 5 :
__________1D.- AdminGroups=>change (group)
1.- 6 :
__________1D.- Public=>Online avaible for read
1.- 7 :
__________1D.- Anonimus=>Allways avaible for read
**********
delete user level
**********+

UsrBscInDlt('Color','DEMO','basic') **********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- Demo=>update (user)
1.- 3 :
__________1D.- Everyone=>change (group)
1.- 4 :
__________1D.- AdminGroups=>change (group)
1.- 5 :
__________1D.- Public=>Online avaible for read
1.- 6 :
__________1D.- Anonimus=>Allways avaible for read
**********
delete Group level
**********+

GrpBscInDlt('Color','AdminGroups','basic')
C0010M008.-Record don't exist

**********
Show
**********+

ShwCntInSft('Color','basic')
1.- 1 :
__________1D.- admin=>owner (user)
1.- 2 :
__________1D.- Demo=>update (user)
1.- 3 :
__________1D.- Everyone=>change (group)
1.- 4 :
__________1D.- AdminGroups=>change (group)
1.- 5 :
__________1D.- Public=>Online avaible for read
1.- 6 :
__________1D.- Anonimus=>Allways avaible for read
**********
Show Basic Content
**********+

ShwBscIn('basic')
0D.- index=>Main index
0D.- first=>My First Content
0D.- Color=>names in spanish and english
**********
Remove Basic Content
**********+

RmvCntIn('Color',basic')
Empty

Delete!!!

**********
Show Basic Content
**********+

ShwBscIn('basic')
0D.- index=>Main index
0D.- first=>My First Content
**********+++++++++++
Demo Finish
**********+++++++++++

