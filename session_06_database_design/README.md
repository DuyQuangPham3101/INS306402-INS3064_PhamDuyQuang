## Part 1: Normalization

| Table Name  | Primary Key   | Foreign Key           | Normal Form | Description                                                                         |
| :---------- | :------------ | :-------------------- | :---------- | :---------------------------------------------------------------------------------- |
| Students    | student_id    | None                  | 3NF         | Stores unique student profile information (Name, Email).                            |
| Professors  | professor_id  | None                  | 3NF         | Stores unique professor details to avoid transitive dependency.                     |
| Courses     | course_id     | professor_id          | 3NF         | Stores course details and links to the professor teaching it.                       |
| Enrollments | enrollment_id | student_id, course_id | 3NF         | Junction table managing the many-to-many relationship between students and courses. |

## Part 2: Relationships

- **Author to Book:** One-to-Many (1:N). Một tác giả có thể viết nhiều sách, khóa ngoại (FK) nằm ở bảng Book.
- **Citizen to Passport:** One-to-One (1:1). Một công dân sở hữu một hộ chiếu duy nhất, khóa ngoại (FK) nằm ở bảng Passport.
- **Customer to Order:** One-to-Many (1:N). Một khách hàng có thể thực hiện nhiều đơn hàng, khóa ngoại (FK) nằm ở bảng Order.
- **Student to Class:** Many-to-Many (N:N). Một sinh viên có thể học nhiều lớp và một lớp có nhiều sinh viên. Cần bảng trung gian để liên kết.
- **Team to Player:** One-to-Many (1:N). Một đội bóng có nhiều cầu thủ, khóa ngoại (FK) nằm ở bảng Player.
