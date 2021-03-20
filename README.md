# SWCS
Smart Waste Collection System: A database management system that creates an efficient system for users to dispose their waste.

Background
With increasing populations, changing policy requirements, and a sharp trajectory towards climate change, there is a need for new sustainable recycling goals. Improved technology departments and municipalities across the globe are joining the “smart cities” movement to become more efficient in managing solid waste. The need to improve the urban waste collection service, and in general, achieve a more efficient system to dispose of waste, is one of the main challenges that cities face, especially due to the population growth. Thus, smart waste management is a key factor of smart cities.
Problem statement
Design a smart waste collection system portal that allows citizens to segregate the various types of solid waste they want to dispose and generate requests to the municipal authorities to efficiently collect the same.

The system has two interfaces:

1.Citizen
•	Citizens can register as a new user by providing their credentials like name, email-id, phone number and a password.
•	Upon logging in, each citizen is directed to their own citizen dashboard which displays all their basic credentials. 
•	Citizens have an option to schedule a waste pickup request, at a particular date at their chosen location (via a set of options). The pickup request can be no less than 24 hours in advance.
•	Citizens should mention the amount of waste for disposal (in kgs), choose the categories of waste for disposal (organic, medical, toxic, electronic, recyclable), and the date of the waste pickup request.
•	Citizens will be able to see all upcoming waste pickup requests, as well as past pickup request history.
•	The status of each request will be ‘Pending’ initially when the request is created. Once the area admin assigns a truck to pick up the waste, the status will be changed to ‘Vehicle Assigned’.
Green Points:
•	Each citizen is awarded a set of points called green points. Green points are credited to the citizen based on the type of waste and amount of waste that is disposed.
•	The system calculates the green points based on the ‘green points table’ present in the database. The credits allotted to each waste category varies and the system refers the table before allocating the points after each waste pickup request.

2.Area Admin
•	Each admin has authority over a given area. The city is divided according to the pin code. Thus, each admin resides over the area corresponding to one pin code.
•	Admins log into their admin dashboard which displays all their basic credentials (name, area, pin code of area, email-id).
•	Admins can view the waste pick up requests that are located under their area/pin code only.
•	The functions of the Admins include
  o	Registration of Sanitation Worker – The admin can employ new workers and add their credentials to the database. The admin will have to enter basic information of the workers like name and phone number. The sanitation worker is initially ‘Available’. Once the sanitation worker is assigned to a truck, their status becomes ‘Unavailable’.
  o	Registration of Truck – Admins can register new trucks that are required for their sector. Trucks are owned by the area admin for that particular area only. The admins need to enter details such as vehicle number, total capacity of the truck and sanitation worker. Admins will have to assign a sanitation worker for each truck by choosing from a list of options consisting of all the ‘Available’ workers.
  o	Assign trucks – Admins assign the trucks for each pending waste pickup request based on the remaining capacity of the truck.
    i.	Every time a truck is allotted to a request, the capacity of the truck is reduced by the amount of waste it needs to pickup from its total capacity.
    ii.	Admins can select the appropriate truck of sufficient capacity to pick up the waste by examining the capacity left of each truck. 

•	For each pickup request, the Admin is shown the following:
  o	Citizen name & location
  o	Date of request
  o	Date of Pickup
  o	Garbage amount
  o	Garbage category
  o	Truck vehicle number (assigned by admin)
•	Admins will be able to view the past request history of the area.

DELIVERABLES:
CITIZEN :
1.	Creates account using Name, Contact No. , Email ID, etc. They must be able to log in to their account using login ID and password.
2.	Must be able to create a pickup request mentioning category, amount, and location/address of waste collection and choose a date for pick up.
3.	After pickup, if the Citizen has properly segregated and labelled the waste, he/she will be credited with some Citizen Credit Points based on the amount and category of waste disposed of.
4.	Can check pickup history and the Citizen Green Points earned.
 
 
ADMIN :
1.	Holds account bearing their Name, Contact Number, Email ID, area, pin code. They must be able to log in to their account using login ID and password.
2.	Must be able to view the Requests made per area along with the truck number and the total waste to be collected.
3.	Must be able to register a new truck for its area.
4.	Must be able to register a new sanitation worker.
5.	Must be able to assign a truck of sufficient capacity to a particular area.
6.	Must be able to assign a worker to a truck.
7.	View & Update the pending pick-up requests.
8.	Access the history of all the requests made in their area.
 


