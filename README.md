# CT591-Final
การออกแบบฐานข้อมูล และหลักการออกแบบ Web ออกแบบเป็น Multi Page application
ฐานข้อมูลใช้ MySQL โดยจะอยู่ที่หน้า โดยเชื่อมต่อกับ Code ที่หน้า connectdatabase.php >> mycontact.php
ในหัวข้อ Contact โดยจะมีการเก็บข้อมูลของ Name , Surname , Telephone , Address

การเตรียมการระบบ Cloud เป็นการใช้ ec2 โดยใช้ instance type t2micro , Architecture x86
ในการทำ และ install docker environment รวมถึง git เพื่อ clone data มา deploy

การ deploy ตัว code มาทำงาน 
1.สร้างเว็บและ sql ให้เรียบร้อย พร้อมทั้ง dockerfile และ docker-compose.yaml
2.เตรียม git ให้พร้อม 
3.สร้าง repositories ใน Git Hub
4.อัพโหลด 1 ขึ้น repositories
5.ใน Aws install docker engine ให้เรียบร้อย 
6.ใน Aws install docker compose ให้เรียบร้อย
7.ใน command line git clone ลง AWS ให้เรียบร้อย
8.เปลี่ยน Permission ของไฟล์ที่ Clone ลงมาโดยใช้ -777 ทั้งหมด
10.docker-compose up --build

