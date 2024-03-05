from django.urls import path
from .views import adminSetup, contactProfile, contactsView, contactsViewAG, crmClient, dashboardView, showForms

urlpatterns = [
    path("", dashboardView),
    path("/contacts/", contactsView),
    path("/clients/", crmClient),
    path("/contacts/profile", contactProfile),
    path("contactsAG/", contactsViewAG),
    path("adminSetup/", adminSetup),
    path('forms',showForms)
]