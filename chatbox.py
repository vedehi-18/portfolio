import tkinter as tk
from tkinter import scrolledtext
import queue
import threading

class Chatbox:
    def __init__(self):
        self.window = tk.Tk()
        self.window.title("Chatbox")
        self.chat_log = scrolledtext.ScrolledText(self.window, width=40, height=10)
        self.chat_log.pack(padx=10, pady=10)

        self.input_field = tk.Entry(self.window, width=30)
        self.input_field.pack(padx=10, pady=10)

        self.send_button = tk.Button(self.window, text="Send", command=self.send_message)
        self.send_button.pack(padx=10, pady=10)

        self.knowledge_base = {
            'hello': 'Hi! How can I help you?',
            'how are you':'i m good how are',
            'goodbye': 'See you later!' 
        }

        self.queue = queue.Queue()

    def send_message(self):
        try:
            user_message = self.input_field.get()
            self.chat_log.insert(tk.END, f"You: {user_message}\n")

            self.queue.put(user_message)
        except Exception as e:
            self.chat_log.insert(tk.END, f"Error: {str(e)}\n")

    def process_queue(self):
        try:
            message = self.queue.get(block=False)
            response = self.get_response(message)
            self.chat_log.insert(tk.END, f"Chatbox: {response}\n")
            self.input_field.delete(0, tk.END)
        except queue.Empty:
            pass
        self.window.after(100, self.process_queue)

    def get_response(self, user_message):
        tokens = user_message.lower().split()
        for token in tokens:
            if token in self.knowledge_base:
                return self.knowledge_base[token]
        return 'I didn\'t understand that.'

    def run(self):
        self.process_queue()
        self.window.mainloop()

if __name__ == "__main__":
    chatbox = Chatbox()
    chatbox.run()