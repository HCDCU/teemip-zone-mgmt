<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class extensions for IPConfig
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:IPConfig/Attribute:ip_update_dns_records' => 'Automatically update DNS records',
	'Class:IPConfig/Attribute:ip_update_dns_records+' => 'Automatically create, modify or delete DNS records linked to an IP address',
	'Class:IPConfig/Attribute:ip_update_dns_records/Value:yes' => 'Yes',
	'Class:IPConfig/Attribute:ip_update_dns_records/Value:no' => 'No',
));

//
// Class extensions for IPAddress
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:IPAddress/Attribute:view_id' => 'Vista DNS',
	'Class:IPAddress/Attribute:view_id+' => '',
	'Class:IPAddress/Attribute:view_name' => 'Nombre de la Vista',
	'Class:IPAddress/Attribute:view_name+' => '',
	'Class:IPAddress/Tab:rrecords_list' => 'Registros DNS',
	'Class:IPAddress/Tab:rrecords_list+' => 'List of all DNS Resource Records associated to the IP address.',
	'Class:IPAddress/Tab:ptrrecords_list' => 'Registos PTR:',
	'Class:IPAddress/Tab:ptrrecords_list_empty' => 'There are no PTR records linked to this IP',
	'Class:IPAddress/Tab:arecords_list' => 'Registros A:',
	'Class:IPAddress/Tab:arecords_list_empty' => 'There are no A records linked to this IP',
	'Class:IPAddress/Tab:aaaarecords_list' => 'Registros AAAA:',
	'Class:IPAddress/Tab:aaaarecords_list_empty' => 'There are no AAAA records linked to this IP',
	'Class:IPAddress/Tab:cnamerecords_list' => 'Registros CNAME:',
	'Class:IPAddress/Tab:cnamerecords_list_empty' => 'There are no CNAME records linked to this IP',
));

//
// Class extensions for IPSubnet
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:IPSubnet/Tab:rrecords_list' => 'Registros DNS',
	'Class:IPSubnet/Tab:rrecords_list+' => 'List of all DNS Resource Records associated to the subnet.',
	'Class:IPSubnet/Tab:ptrrecords_list' => 'Registros PTR:',
	'Class:IPSubnet/Tab:ptrrecords_list_empty' => 'There are no PTR records linked to this subnet',
	'Class:IPSubnet/Tab:arecords_list' => 'Registros A:',
	'Class:IPSubnet/Tab:arecords_list_empty' => 'There are no A records linked to this subnet',
	'Class:IPSubnet/Tab:aaaarecords_list' => 'Registros AAAA:',
	'Class:IPSubnet/Tab:aaaarecords_list_empty' => 'There are no AAAA records linked to this subnet',
	'Class:IPSubnet/Tab:cnamerecords_list' => 'Registos CNAME:',
	'Class:IPSubnet/Tab:cnamerecords_list_empty' => 'There are no CNAME records linked to this subnet',
));

//
// Class: View
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:View' => 'View',
	'Class:View+' => 'DNS View',
	'Class:View/Attribute:org_id' => 'Organización',
	'Class:View/Attribute:org_id+' => '',
	'Class:View/Attribute:org_name' => 'Nombre de la Organización',
	'Class:View/Attribute:org_name+' => '',
	'Class:View/Attribute:name' => 'Nombre',
	'Class:View/Attribute:name+' => '',
	'Class:View/Attribute:description' => 'Descripción',
	'Class:View/Attribute:description+' => '',
	'Class:View/Attribute:zones_list' => 'Zonas',
	'Class:View/Attribute:zones_list+' => 'All the zones in the view',
));

//
// Class: Zone
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Zone' => 'Zona',
	'Class:Zone+' => '',
	'Class:Zone/Name' => '%1$s',
	'Class:Zone:baseinfo' => 'Información General',
	'Class:Zone:soainfo' => 'Start Of Authority',
	'Class:Zone/Attribute:view_id' => 'View',
	'Class:Zone/Attribute:view_id+' => '',
	'Class:Zone/Attribute:mapping' => 'Mapping type',
	'Class:Zone/Attribute:mapping+' => '',
	'Class:Zone/Attribute:mapping/Value:direct' => 'Forward',
	'Class:Zone/Attribute:mapping/Value:direct+' => 'Forward mapping',
	'Class:Zone/Attribute:mapping/Value:ipv4reverse' => 'IPv4 Reverse',
	'Class:Zone/Attribute:mapping/Value:ipv4reverse+' => 'Reverse mapping for IPv4 addresses: IPv4 to name',
	'Class:Zone/Attribute:mapping/Value:ipv6reverse' => 'IPv6 Reverse',
	'Class:Zone/Attribute:mapping/Value:ipv6reverse+' => 'Reverse mapping for IPv6 addresses: IPv6 to name',
	'Class:Zone/Attribute:name' => 'Zone Name',
	'Class:Zone/Attribute:name+' => '',
	'Class:Zone/Attribute:comment' => 'Comment',
	'Class:Zone/Attribute:comment+' => '',
	'Class:Zone/Attribute:requestor_id' => 'Requestor',
	'Class:Zone/Attribute:requestor_id+' => '',
	'Class:Zone/Attribute:requestor_name' => 'Requestor name',
	'Class:Zone/Attribute:requestor_name+' => '',
	'Class:Zone/Attribute:ttl' => 'TTL',
	'Class:Zone/Attribute:ttl+' => '',
	'Class:Zone/Attribute:sourcedname' => 'Master server',
	'Class:Zone/Attribute:sourcedname+' => '',
	'Class:Zone/Attribute:mbox' => 'Hostmaster mailbox',
	'Class:Zone/Attribute:mbox+' => '',
	'Class:Zone/Attribute:serial' => 'Serial',
	'Class:Zone/Attribute:serial+' => '',
	'Class:Zone/Attribute:refresh' => 'Refresh',
	'Class:Zone/Attribute:refresh+' => '',
	'Class:Zone/Attribute:retry' => 'Retry',
	'Class:Zone/Attribute:retry+' => '',
	'Class:Zone/Attribute:expire' => 'Expire',
	'Class:Zone/Attribute:expire+' => '',
	'Class:Zone/Attribute:minimum' => 'Minimum',
	'Class:Zone/Attribute:minimum+' => '',
	'Class:Zone/Attribute:functionalcis_list' => 'Servidores Autoritativos',
	'Class:Zone/Attribute:functionalcis_list+' => 'Authoritative servers looking after the zone',
	'Class:Zone/Tab:nsrecords_list' => 'NS records',
	'Class:Zone/Tab:nsrecords_list+' => 'List of all NS records of the zone',
	'Class:Zone/Tab:arecords_list' => 'A Records',
	'Class:Zone/Tab:arecords_list+' => 'List of all A Records of the zone',
	'Class:Zone/Tab:aaaarecords_list' => 'AAAA Records',
	'Class:Zone/Tab:aaaarecords_list+' => 'List of all AAAA Records of the zone',
	'Class:Zone/Tab:cnamerecords_list' => 'CNAME Records',
	'Class:Zone/Tab:cnamerecords_list+' => 'List of all CNAME Records of the zone',
	'Class:Zone/Tab:ptrrecords_list' => 'PTR records',
	'Class:Zone/Tab:ptrrecords_list+' => 'List of all PTR records of the zone',
	'Class:Zone/Tab:otherrecords_list' => 'Other Records',
	'Class:Zone/Tab:otherrecords_list+' => 'List of all other Records of the zone',
	'Class:Zone/Tab:mxrecords_list' => 'List of all %1$s MX records of the zone',
	'Class:Zone/Tab:mxrecords_list_empty' => 'There are no MX records in the zone',
	'Class:Zone/Tab:srvrecords_list' => 'List of all %1$s SRV records of the zone',
	'Class:Zone/Tab:srvrecords_list_empty' => 'There are no SRV records in the zone',
	'Class:Zone/Tab:txtrecords_list' => 'List of all %1$s TXT records of the zone',
	'Class:Zone/Tab:txtrecords_list_empty' => 'There are no TXT records in the zone',
	'Class:Zone/DataFile:ns' => '
;
; Name servers
;',
	'Class:Zone/DataFile:ipv4' => '
;
; IPv4 addresses for the canonical names
;',
	'Class:Zone/DataFile:ipv6' => '
;
; IPv6 addresses for the canonical names
;',
	'Class:Zone/DataFile:cnames' => '
;
; Aliases
;',
	'Class:Zone/DataFile:mx' => '
;
; Mail exchangers
;',
	'Class:Zone/DataFile:ptr' => '
;
; Addresses point to canonical names
;',
'Class:Zone/DataFile:srv' => '
;
; Locate services
;',
	'Class:Zone/DataFile:txt' => '
;
; Text
;',
	'Class:Zone/DataFile:records_in_alphaorder' => '
;
; Other records in alphabetical order
;',
));

//
// Class: lnkFunctionalCIToZone
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:lnkFunctionalCIToZone' => 'Link FunctionalCI / Zone',
	'Class:lnkFunctionalCIToZone+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:functionalci_id' => 'Server',
	'Class:lnkFunctionalCIToZone/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:functionalci_name' => 'Server name',
	'Class:lnkFunctionalCIToZone/Attribute:functionalci_name+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:zone_id' => 'Zona',
	'Class:lnkFunctionalCIToZone/Attribute:zone_id+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:zone_name' => 'Nombre de la Zona',
	'Class:lnkFunctionalCIToZone/Attribute:zone_name+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:authority' => 'Autoridad',
	'Class:lnkFunctionalCIToZone/Attribute:authority+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:master' => 'Master',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:master+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:slave' => 'Slave',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:slave+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:hidden_master' => 'Hidden master',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:hidden_mastermaster+' => '',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:hidden_slave' => 'Hidden slave',
	'Class:lnkFunctionalCIToZone/Attribute:authority/Value:hidden_slave+' => '',
));

//
// Class: ResourceRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:ResourceRecord' => 'Registro de Recurso',
	'Class:ResourceRecord+' => 'Registro de Recurso DNS',
	'Class:ResourceRecord/Attribute:finalclass' => 'Type',
	'Class:ResourceRecord/Attribute:finalclass+' => '',
	'Class:ResourceRecord/Attribute:org_id' => 'Organización',
	'Class:ResourceRecord/Attribute:org_id+' => '',
	'Class:ResourceRecord/Attribute:org_name' => 'Nombre de Organización',
	'Class:ResourceRecord/Attribute:org_name+' => '',
	'Class:ResourceRecord/Attribute:name' => 'Nombre del RR',
	'Class:ResourceRecord/Attribute:name+' => '',
	'Class:ResourceRecord/Attribute:comment' => 'Comentario',
	'Class:ResourceRecord/Attribute:comment+' => '',
	'Class:ResourceRecord/Attribute:zone_id' => 'Zona',
	'Class:ResourceRecord/Attribute:zone_id+' => '',
	'Class:ResourceRecord/Attribute:zone_name' => 'Nombre de Zona',
	'Class:ResourceRecord/Attribute:zone_name+' => '',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl' => 'Overwrite zone TTL',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl+' => '',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl/Value:no' => 'No',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl/Value:no+' => '',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl/Value:yes' => 'Yes',
	'Class:ResourceRecord/Attribute:overwrite_zone_ttl/Value:yes+' => '',
	'Class:ResourceRecord/Attribute:ttl' => 'TTL',
	'Class:ResourceRecord/Attribute:ttl+' => '',
	'ResourceRecord:Zone' => 'Zona',
	'ResourceRecord:Record' => 'Atributos RR',
));

//
// Class: ARecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:ARecord' => 'A',
	'Class:ARecord+' => '',
	'Class:ARecord/Attribute:ip_id' => 'Dirección IPv4',
	'Class:ARecord/Attribute:ip_id+' => '',
	'Class:ARecord/Attribute:ip_fqdn' => 'Dirección IPv4 FQDN',
	'Class:ARecord/Attribute:ip_fqdn+' => '',
	));

//
// Class: AAAARecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:AAAARecord' => 'AAAA',
	'Class:AAAARecord+' => '',
	'Class:AAAARecord/Attribute:ip_id' => 'Dirección IPv6',
	'Class:AAAARecord/Attribute:ip_id+' => '',
	'Class:AAAARecord/Attribute:ip_fqdn' => 'Dirección IPv6 FQDN',
	'Class:AAAARecord/Attribute:ip_fqdn+' => '',
));

//
// Class: CNAMERecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:CNAMERecord' => 'CNAME',
	'Class:CNAMERecord+' => '',
	'Class:CNAMERecord/Attribute:cname' => 'Canonical Name',
	'Class:CNAMERecord/Attribute:cname+' => '',
));

//
// Class: MXRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:MXRecord' => 'MX',
	'Class:MXRecord+' => '',
	'Class:MXRecord/Attribute:preference' => 'Preferencia',
	'Class:MXRecord/Attribute:preference+' => '',
	'Class:MXRecord/Attribute:exchange' => 'Mail exchange server',
	'Class:MXRecord/Attribute:exchange+' => '',
));

//
// Class: NSRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:NSRecord' => 'NS',
	'Class:NSRecord+' => '',
	'Class:NSRecord/Attribute:nsname' => 'Name server',
	'Class:NSRecord/Attribute:nsname+' => '',
));

//
// Class: PTRRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:PTRRecord' => 'PTR',
	'Class:PTRRecord+' => '',
	'Class:PTRRecord/Attribute:hostname' => 'Hostname',
	'Class:PTRRecord/Attribute:hostname+' => '',
));

//
// Class: SOARecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:SOARecord' => 'SOA',
	'Class:SOARecord+' => '',
	'Class:SOARecord/Attribute:sourcedname' => 'Master server',
	'Class:SOARecord/Attribute:sourcedname+' => '',
	'Class:SOARecord/Attribute:mbox' => 'Hostmaster mailbox',
	'Class:SOARecord/Attribute:mbox+' => '',
	'Class:SOARecord/Attribute:serial' => 'Serial',
	'Class:SOARecord/Attribute:serial+' => '',
	'Class:SOARecord/Attribute:refresh' => 'Refresh',
	'Class:SOARecord/Attribute:refresh+' => '',
	'Class:SOARecord/Attribute:retry' => 'Retry',
	'Class:SOARecord/Attribute:retry+' => '',
	'Class:SOARecord/Attribute:expire' => 'Expire',
	'Class:SOARecord/Attribute:expire+' => '',
	'Class:SOARecord/Attribute:minimum' => 'Minimum',
	'Class:SOARecord/Attribute:minimum+' => '',
));

//
// Class: TXTRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:TXTRecord' => 'TXT',
	'Class:TXTRecord+' => '',
	'Class:TXTRecord/Attribute:txt' => 'Texto',
	'Class:TXTRecord/Attribute:txt+' => '',
));

//
// Class: SRVRecord
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:SRVRecord' => 'SRV',
	'Class:SRVRecord+' => '',
	'Class:SRVRecord/Attribute:priority' => 'Prioridad',
	'Class:SRVRecord/Attribute:priority+' => '',
	'Class:SRVRecord/Attribute:weight' => 'Weight',
	'Class:SRVRecord/Attribute:weight+' => '',
	'Class:SRVRecord/Attribute:port' => 'Port',
	'Class:SRVRecord/Attribute:port+' => '',
	'Class:SRVRecord/Attribute:target' => 'Target',
	'Class:SRVRecord/Attribute:target+' => '',
));

//
// Management of zones
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'UI:ZoneManagement:Action:New:Zone:V4:WrongFormat' => 'Wrong format: IPv4 reverse zone format is x.[y.][z.]in-addr.arpa. !',
	'UI:ZoneManagement:Action:New:Zone:V6:WrongFormat' => 'Wrong format: IPv6 reverse zone format is x1.[x2.]...[xi.]ip6.arpa. !',
	'UI:ZoneManagement:Action:New:lnkFunctionalCIToZone:WrongCIClass' => 'An authoritative server can only be of Server or Virtual Machine class !',
));

//
// Management of data files
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'UI:ZoneManagement:Action:DataFileDisplay:Zone' => 'Data file',
	'UI:ZoneManagement:Action:DataFileDisplay:Zone:Menu' => 'Display data file',
	'UI:ZoneManagement:Action:DataFileDisplay:Zone:PageTitle_Object_Class' => '%1$s - %2$s data file',
	'UI:ZoneManagement:Action:DataFileDisplay:Zone:Title_Class_Object' => 'Data file of %1$s: %2$s',
	'UI:ZoneManagement:Action:DataFileDisplay:Zone:sort_by_record' => 'Display data file sorted by records',
	'UI:ZoneManagement:Action:DataFileDisplay:Zone:sort_by_char' => 'Display data file sorted by alphabetical order',
	'UI:ZoneManagement:Action:Details:Zone:Menu' => 'Details',
));
	
//
// Management of records
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'UI:ZoneManagement:Action:New:PTRRecord:V4:WrongNumberOfDigit' => 'Wrong format: IPv4 PTR records are made of 4 numbers - x.y.z.t.in-addr.arpa. !',
	'UI:ZoneManagement:Action:New:PTRRecord:V4:IpNotInRange' => 'Wrong format: IPv4 numbers are contained within 0 - 255 range!',
	'UI:ZoneManagement:Action:New:PTRRecord:V4:WrongFormat' => 'Wrong format: IPv4 PTR records format is x.y.z.t.in-addr.arpa. !',
	'UI:ZoneManagement:Action:New:PTRRecord:V6:WrongNumberOfDigit' => 'Wrong format: IPv6 PTR records are made of 32 numbers - x1.x2....x32.ip6.arpa. !',
	'UI:ZoneManagement:Action:New:PTRRecord:V6:IpNotInRange' => 'Wrong format: IPv6 numbers are contained within 0 - F range, in hexa!',
	'UI:ZoneManagement:Action:New:PTRRecord:V6:WrongFormat' => 'Wrong format: IPv6 PTR records format is x1.x2....x32.ip6.arpa. !',

	'UI:ZoneManagement:Action:IPObject:UpdateRR' => 'Create / Update DNS RRs',
	'UI:ZoneManagement:Action:IPObject:DeleteRR' => 'Delete DNS RRs',

	'UI:ZoneManagement:Action:IPAddress:UpdateRR' => 'Create / Update DNS RRs',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:Error:NoShortName' => 'IP address has no short name!',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:Error:NoDomainName' => 'IP address has no domain name!',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:Error:CannotFindZone:direct' => 'Cannot find forward zone for given domain and view!',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:Error:CannotFindZone:ipv4reverse' => 'Cannot find reverse zone!',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:Error:CannotFindZone:ipv6reverse' => 'Cannot find reverse zone!',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:HasNotRun' => 'No resource record has been created from address: %1$s',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:HasErrors' => 'Some errors have been found: %1$s',
	'UI:ZoneManagement:Action:IPAddress:UpdateRRs:HasRun' => 'Resource records associated to IP address have been created or updated.',
	'UI:ZoneManagement:Action:IPAddress:CleanRRs:HasRun' => 'Resource records associated to IP address have been purged.',
	'UI:ZoneManagement:Action:IPAddress:DeleteRR' => 'Delete DNS RRs',

	'UI:ZoneManagement:Action:IPSubnet:UpdateRRs:HasNotRun' => 'No resource record has been created from subnet: %1$s',
	'UI:ZoneManagement:Action:IPSubnet:UpdateRRs:HasRun' => 'Resource records associated to subnet\'s IP addresses have been created or updated.',
	'UI:ZoneManagement:Action:IPSubnet:CleanRRs:HasRun' => 'Resource records associated to subnet\'s IP addresses have been purged.',
));

//
// Application Menu
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:DNSManagement' => 'Administración de DNS',
	'Menu:DNSManagement+' => '',
	'Menu:NameSpace' => 'Espacio de Nombres',
	'Menu:NameSpace+' => '',
	'Menu:DNSSpace:MainObjects' => 'Objetos Principales DNS',
	'Menu:DNSSpace:ResourceRecords' => 'Registro de Recursos',
	'Menu:View' => 'Vistas',
	'Menu:View+' => 'Vistas DNS',
	'Menu:Domain' => 'Dominios',
	'Menu:Domain+' => 'Dominios DNS',
	'Menu:Zone' => 'Zonas',
	'Menu:Zone+' => 'Zonas DNS',
	'Menu:ZoneManagement:ResourceRecords' => 'Registros de Recursos',
	'Menu:ZoneManagement:ResourceRecords+' => 'Registros de Recursos DNS',
	'Menu:NewResourceRecord' => 'Nuevo RR',
	'Menu:NewResourceRecord+' => 'Nuevo Registro de Recurso DNS',
	'Menu:SearchResourceRecord' => 'Buscar RR',
	'Menu:SearchResourceRecord+' => 'Buscar Registro de Recursos DNS',
	'Menu:ARecord' => 'A',
	'Menu:ARecord+' => 'Registros A',
	'Menu:AAAARecord' => 'AAAA',
	'Menu:AAAARecord+' => 'Registros AAAA',
	'Menu:CNAMERecord' => 'CNAME',
	'Menu:CNAMERecord+' => 'Registros CNAME',
	'Menu:MXRecord' => 'MX',
	'Menu:MXRecord+' => 'Registros MX',
	'Menu:NSRecord' => 'NS',
	'Menu:NSRecord+' => 'Registros NS',
	'Menu:PTRRecord' => 'PTR',
	'Menu:PTRRecord+' => 'Registros PTR',
	'Menu:SOARecord' => 'SOA',
	'Menu:SOARecord+' => 'Registros SOA',
	'Menu:TXTRecord' => 'TXT',
	'Menu:TXTRecord+' => 'Registros TXT',
	'Menu:SRVRecord' => 'SRV',
	'Menu:SRVRecord+' => 'Registros SRV',
));
