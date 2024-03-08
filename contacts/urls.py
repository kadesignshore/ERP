from django.urls import path
from .views import adminSetup, contactProfile, contactsView, contactsViewAG, crmClient, crmSalesLeadManagement, crmSuppliers, dashboardView, showForms

urlpatterns = [
    path("", dashboardView),
    path("contacts/", contactsView, name="contacts"),
    path("clients/", crmClient, name="clients"),
    path("salesLeadManagement/", crmSalesLeadManagement, name="salesLeadManagement"),
    path("suppliers/", crmSuppliers, name="suppliers"),
    path("contacts/profile", contactProfile),
    path("contactsAG/", contactsViewAG),
    path("adminSetup/", adminSetup),
    path('forms',showForms)
]