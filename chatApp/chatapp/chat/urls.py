from django.urls import path

from . import views

app_name = "chat"
urlpatterns = [
    path('', views.index, name='index'),

    path("<int:chat_id>/",views.openchat,name="openchat"),
    
    path("<int:chat_id>/changechatname/",views.changeChatname,name="changechatname"),

    path("<int:chat_id>/sendmessage/", views.sendmessage, name="sendmessage"),

    path("newchat/",views.newchat, name="newchat")
]