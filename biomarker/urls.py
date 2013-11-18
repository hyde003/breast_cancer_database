from django.conf.urls import patterns, include, url
from biomarker import settings
from report import urls

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
# admin.autodiscover()

urlpatterns = patterns('',
<<<<<<< HEAD
	url(r'^static/(?P<path>.*)$', 'django.views.static.serve', {'document_root': settings.STATIC_ROOT }),
	url(r'^index/', include('report.urls')),
	url(r'^register/', include('registrations.urls')),
=======
	url(r'^breastcancer_database/', include('report.urls')),
>>>>>>> 28226f3b0bb6a0d7d2f7e47decf6a0a0140a064c
    # Examples:
    # url(r'^$', 'biomarker.views.home', name='home'),
    # url(r'^biomarker/', include('biomarker.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    # url(r'^admin/', include(admin.site.urls)),
)
