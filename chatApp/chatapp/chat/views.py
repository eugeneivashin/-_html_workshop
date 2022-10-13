from email import message
from multiprocessing import context
from django.shortcuts import get_object_or_404, render
from django.shortcuts import HttpResponse, HttpResponseRedirect

from .models import Chat
from .models import Message

from django.urls import reverse
# Create your views here.

def index(request):
    chat_list = Chat.objects.all()
    context = {'chat_list': chat_list}  
    return render(request,'chat/index.html',context)

def openchat(request,chat_id):
    chat_list = Chat.objects.all()

    messages_list = Message.objects.filter(chat=chat_id).all()

    context = { 'chat_list': chat_list,
                'messages_list': messages_list,
                'current_chat': Chat.objects.get(pk=chat_id)}
    return render(request,'chat/index.html',context)

def changeChatname(request, chat_id):
    chat = get_object_or_404(Chat,pk=chat_id)
    newname = request.POST['chatnameInput']
    chat.chatName_text = newname
    chat.save()
    return HttpResponseRedirect(reverse('chat:openchat',args=(chat.id,)))

def sendmessage(request, chat_id):
    newmsg = Message(sender=request.POST['sender'], chat = Chat.objects.get(pk = chat_id), message_text = request.POST['message'])
    newmsg.save()
    return HttpResponseRedirect(reverse('chat:openchat',args=(chat_id,)))

def newchat(request):
    chat_list = Chat.objects.all()
    chatnum = len(chat_list)
    newchatname = "New chat" + str(chatnum)
    newchat = Chat(chatName_text = newchatname)
    newchat.save()
    newmsg = Message(sender="", chat = Chat.objects.get(pk = newchat.id), message_text = "")
    newmsg.save()
    return HttpResponseRedirect(reverse ('chat:index'))