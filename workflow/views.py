from django.shortcuts import render
from django.urls import reverse
from django.template import RequestContext
from django.http import HttpResponseRedirect


def my_view(request):
    # Do some processing...
    return HttpResponseRedirect(reverse('workflow:activites'))
# Create your views here.
def workflowView(request):
    return render(request,"workflowSidebar.html")

def workflowActivites(request):
    return render(request, "activites.html",{"workflow":'Activites'})

def workflowAppointments(request):
    return render(request, "appointments.html", {"workflow":'Appointments'})

def workflowBusinessAlerts(request):
    return render(request, "businessalerts.html", {"workflow":'businessalerts'})

def workflowDiaries(request):
    return render(request, "diaries.html", {"workflow":'Diaries'})

def workflowEmails(request):
    return render(request, "emails.html", {"workflow":'Emails'})

def workflowMeetings(request):
    return render(request, "meetings.html", {"workflow":'Meetings'})

def workflowTasks(request):
    return render(request, "tasks.html", {"workflow":'Tasks'})

def workflowFolder(request):
    return render(request, "folder.html", {"workflow":'Folder'})