
from django.conf.urls.defaults import patterns,url,include
from report import views
from registrations import views as register
from input import views as input_view
urlpatterns = patterns('', 
	url(r'main/$',views.main,name='main_page'),
	url(r'donation/',input_view.donation_form, name = 'donate'),
	url(r'physician_login/',register.register, name = 'register'),
	url(r'curator_login/', register.register, name = 'register'),
	url(r'patient_login/', register.register, name = 'register'),
	)

