from django.shortcuts import render
from django.urls import reverse
from django.template import RequestContext
from django.http import HttpResponseRedirect
from .forms import CustomerForm

def my_view(request):
    # Do some processing...
    return HttpResponseRedirect(reverse('crm:contacts'))

def dashboardView(request):
    return render(request,"index.html")

def contactsView(request):
    return render(request,"crm.html",{"crm":'Contact'})

def contactsViewAG(request):
    # contacts view using ag grid
    return render(request,"crm.html",{"crm":'Contact'})

def adminSetup(request):
    return render(request,"adminSetup.html")

def crmClient(request):
    return render(request, "crm.html",{"crm":'Client'})

def crmSalesLeadManagement(request):
    return render(request, "salesLead.html",{"crm":'Sales Lead Management'})

def crmSuppliers(request):
    return render(request, "crm.html",{"crm":'Suppliers'})

def contactProfile(request):
    return render(request, "contactProfile.html")

def showForms(request):
    form = CustomerForm()
    context = {'form':form}
    return render(request,'forms.html',context)


