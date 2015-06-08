/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IODades.DB;

import Datos.comunidades;
import Datos.eventos;
import Datos.municipios;
import Datos.provincias;
import Datos.stock;
import Datos.ubicacion;
import Datos.usuarios;
import IODades.DataSource;
import java.io.FileWriter;
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import javax.xml.bind.JAXBContext;
import javax.xml.bind.JAXBException;
import javax.xml.bind.MarshalException;
import javax.xml.bind.Marshaller;
import javax.xml.bind.Unmarshaller;
import Datos.Gcomunidades;
import Datos.Geventos;
import Datos.Gmunicipios;
import Datos.Gprovincias;
import Datos.Gstock;
import Datos.Gubicacion;
import Datos.Gusuarios;

/**
 *
 * @author devweb
 */

public class BTCMySQL implements DataSource{
    
protected Connection connect = null; //objecte de connexió
protected Statement statement = null; // objecte que guarda una sentència SQL
protected ResultSet resultSet = null; // objecte que guarda el resultat de una sentència SQL

//escribir a xml
JAXBContext context;
Marshaller javaToXml;
Unmarshaller xmltojava;

//control de errores
int f_error=0;
    

@Override
public int exportdades (String datos1, String datos2){

String[] parts = datos1.split(";");
ArrayList lista = new ArrayList();

    
try {            
        connect = DriverManager.getConnection ("jdbc:mysql://localhost/buscatuconcierto?"
                                                +"user=root&password=");
        
    } catch (SQLException ex) {
    f_error=-1;
    }

try {
        statement = connect.createStatement();
        
        if(parts.length==1) //Sin criterio
        {
        resultSet = statement.executeQuery("SELECT * FROM "+parts[0]+"");
        }
        
        if(parts.length==2) //Con criterio
        {
        resultSet = statement.executeQuery("SELECT * FROM "+parts[0]+" WHERE "+parts[1]+"");
        }
        
        if(parts[0].equals("comunidades"))
        {

                while(resultSet.next()) 
                {
                lista.add(new comunidades(resultSet.getInt("id_com"),resultSet.getString("comunidades")));  
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gcomunidades.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gcomunidades grup = new Gcomunidades( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
      
        }
        
        if(parts[0].equals("eventos"))
        {
        
                while(resultSet.next()) 
                {
                lista.add(new eventos(resultSet.getInt("referencia"),resultSet.getString("nombre"),
                                      resultSet.getString("fecha"),resultSet.getString("hora"),
                                      resultSet.getString("localizacion"), resultSet.getString("descripcion"),
                                      resultSet.getInt("puntos")));     
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Geventos.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Geventos grup = new Geventos( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        
        if(parts[0].equals("municipios"))
        {
        
                while(resultSet.next()) 
                {
                lista.add(new municipios(resultSet.getInt("id_mun"), resultSet.getInt("id_prov"), resultSet.getString("municipio")));    
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gmunicipios.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gmunicipios grup = new Gmunicipios( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        
        if(parts[0].equals("provincias"))
        {
            
                while(resultSet.next()) 
                {
                lista.add(new provincias(resultSet.getInt("id_prov"), resultSet.getInt("id_com"), resultSet.getString("provincia")));   
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gprovincias.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gprovincias grup = new Gprovincias( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        
        if(parts[0].equals("stock"))
        {
        
                while(resultSet.next()) 
                {
                lista.add(new stock(resultSet.getString("evento"), resultSet.getInt("cantidad"), resultSet.getFloat("precio"))); 
                //precio es double no FLOAT!!    
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gstock.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gstock grup = new Gstock( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        
        if(parts[0].equals("ubicacion"))
        {
        
                while(resultSet.next()) 
                {
                lista.add(new ubicacion(resultSet.getString("nombre"), resultSet.getString("direccion"), 
                                        resultSet.getString("poblacion"),
                                        resultSet.getString("codigo_postal"), resultSet.getString("provincia"), 
                                        resultSet.getString("pais"),
                                        resultSet.getString("aforo"), resultSet.getString("mapa"), resultSet.getString("parking"),
                                        resultSet.getString("hoteles")));
   
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gubicacion.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gubicacion grup = new Gubicacion( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        
        if(parts[0].equals("usuarios"))
        {
            
                while(resultSet.next()) 
                {
                lista.add(new usuarios(resultSet.getString("nif"), resultSet.getInt("id"), resultSet.getString("nombre"),
                                       resultSet.getString("apellido1"), resultSet.getString("apellido2"), 
                                       resultSet.getString("email"), resultSet.getString("fecha_nacimiento"), 
                                       resultSet.getString("usuario"), resultSet.getString("contrasenya"), 
                                       resultSet.getString("tarjeta"), resultSet.getInt("rol"), resultSet.getInt("puntos")));  
                }
                
                try { // Escriptura Document XML amb JAXB
                    context = JAXBContext.newInstance ( Gusuarios.class );
                    javaToXml = context.createMarshaller ();
                    javaToXml.setProperty ( Marshaller.JAXB_FORMATTED_OUTPUT, true );
                    Gusuarios grup = new Gusuarios( lista );
                    javaToXml.marshal ( grup, new FileWriter ( datos2 ) );
                   }
                   catch (MarshalException ex) {
                   f_error=-52; //MarshalException
                   }
                   catch (JAXBException ex) {
                   f_error=-51; //JAXBException
                   }
                   catch (IOException ex) {
                   f_error=-666; //IOException
                   }
        }
        

    } catch (SQLException ex) {
    f_error=-1;
    }

        


return f_error;
} 


    
}
