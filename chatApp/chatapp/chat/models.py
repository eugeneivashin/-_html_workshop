from unittest.util import _MAX_LENGTH
from django.db import models


# Create your models here.
class Chat(models.Model):
    chatName_text = models.CharField(max_length=30)
    def __str__(self):
        return self.chatName_text

class Message(models.Model):
    sender = models.CharField(max_length=30)
    chat = models.ForeignKey(Chat,on_delete=models.CASCADE)
    message_text = models.CharField(max_length=300)
    def __str__(self):
        return self.message_text