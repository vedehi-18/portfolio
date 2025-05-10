import tkinter as tk
from PIL import Image, ImageTk
class SignUpPage:
    def __init__(self, root):
        self.root = root
        self.root.title("Sign Up Page")

        # Set background image
        self.background_image = Image.open("C:/wamp/www/Groupproject/image/p3.jpeg")
        self.background_image = self.background_image.resize((800, 600))
        self.background_photo = ImageTk.PhotoImage(self.background_image)

        # Create main frame
        self.main_frame = tk.Frame(self.root)
        self.main_frame.pack(fill="both", expand=True)

        # Set background image
        self.background_label = tk.Label(self.main_frame, image=self.background_photo)
        self.background_label.pack(fill="both", expand=True)

        # Create sign up frame
        self.sign_up_frame = tk.Frame(self.main_frame, bg="#ffffff", highlightthickness=1, relief="solid")
        self.sign_up_frame.place(relx=0.5, rely=0.5, anchor="center", relwidth=0.5, relheight=0.5)

        # Create sign up form
        self.create_sign_up_form()

    def create_sign_up_form(self):
        # Create form fields
        tk.Label(self.sign_up_frame, text="Username", font=("Arial", 12), bg="#ffffff").place(relx=0.1, rely=0.1)
        self.username_entry = tk.Entry(self.sign_up_frame, font=("Arial", 12), width=30)
        self.username_entry.place(relx=0.1, rely=0.2)

        tk.Label(self.sign_up_frame, text="Email", font=("Arial", 12), bg="#ffffff").place(relx=0.1, rely=0.3)
        self.email_entry = tk.Entry(self.sign_up_frame, font=("Arial", 12), width=30)
        self.email_entry.place(relx=0.1, rely=0.4)

        tk.Label(self.sign_up_frame, text="Password", font=("Arial", 12), bg="#ffffff").place(relx=0.1, rely=0.5)
        self.password_entry = tk.Entry(self.sign_up_frame, font=("Arial", 12), width=30, show="*")
        self.password_entry.place(relx=0.1, rely=0.6)

        tk.Label(self.sign_up_frame, text="Confirm Password", font=("Arial", 12), bg="#ffffff").place(relx=0.1, rely=0.7)
        self.confirm_password_entry = tk.Entry(self.sign_up_frame, font=("Arial", 12), width=30, show="*")
        self.confirm_password_entry.place(relx=0.1, rely=0.8)

        # Create sign up button
        self.sign_up_button = tk.Button(self.sign_up_frame, text="Sign Up", font=("Arial", 12), command=self.sign_up)
        self.sign_up_button.place(relx=0.5, rely=0.9, anchor="center")

    def sign_up(self):
        # Get form data
        username = self.username_entry.get()
        email = self.email_entry.get()
        password = self.password_entry.get()
        confirm_password = self.confirm_password_entry.get()

        # Validate form data
        if password != confirm_password:
            print("Passwords do not match")
            return

        # Sign up logic here
        print("Sign up successful")
        print("Username:", username)
        print("Email:", email)
        print("Password:", password)

if __name__ == "__main__":
    root = tk.Tk()
    root.geometry("800x600")
    sign_up_page = SignUpPage(root)
    root.mainloop()
