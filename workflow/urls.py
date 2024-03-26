from django.urls import URLPattern, path

from .views import workflowActivites, workflowAppointments, workflowBusinessAlerts, workflowDiaries, workflowEmails, workflowFolder, workflowMeetings, workflowTasks, workflowView


urlpatterns = [
    path("", workflowView),
    path("activites/", workflowActivites, name="activites"),
    path("appointments/", workflowAppointments, name="appointments"),
    path("businessalerts/", workflowBusinessAlerts, name="businessalerts"),
    path("diaries/", workflowDiaries, name="diaries"),
    path("emails/", workflowEmails, name="emails"),
    path("meetings/", workflowMeetings, name="meetings"),
    path("tasks/", workflowTasks, name="tasks"),
    path("folder/", workflowFolder, name="folder"),
]


