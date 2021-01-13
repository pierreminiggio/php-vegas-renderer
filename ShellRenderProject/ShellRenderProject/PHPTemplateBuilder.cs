﻿using ScriptPortal.Vegas;
using System;
using System.Collections.Generic;
using System.IO;

namespace ShellRenderProject
{
    public class EntryPoint
    {
        public void FromVegas(Vegas myVegas)
        {
            writeDownRenderersAndTemplates(myVegas);
            myVegas.Exit();
        }

        public void writeDownRenderersAndTemplates(Vegas myVegas)
        {
            Renderers renderers = myVegas.Renderers;
            List<RendererEntity> entityList = new List<RendererEntity>();

            foreach (Renderer renderer in renderers)
            {
                List<string> templateList = new List<string>();
                foreach (RenderTemplate template in renderer.Templates)
                {
                    templateList.Add(template.Name);
                }

                entityList.Add(new RendererEntity(renderer.Name, templateList));
            }

            string jsonEntities = "[";

            foreach (RendererEntity entity in entityList)
            {
                if (jsonEntities != "[") {
                    jsonEntities += ",";
                }

                jsonEntities += "{";
                jsonEntities += "\"name\": \"" + entity.name + "\"";
                string jsonTemplates = "[";

                foreach (string templateName in entity.templates)
                {
                    if (jsonTemplates != "[") {
                        jsonTemplates += ",";
                    }

                    jsonTemplates += "\"" + templateName + "\"";
                }

                jsonTemplates += "]";
                jsonEntities += ",";
                jsonEntities += "\"templates\": " + jsonTemplates + "";
                jsonEntities += "}";
            }

            jsonEntities += "]";

            string json = "{\"locale\": \"" + myVegas.AppCultureInfo + "\", \"version\": \"" + myVegas.Version + "\", \"renderers\": " + jsonEntities + "}";
            
            File.WriteAllText("./renderers.json", json);
        }
    }

    public class RendererEntity
    {
        public string name;
        public List<string> templates;

        public RendererEntity(string rendererName, List<string> templateList)
        {
            name = rendererName;
            templates = templateList;
        }
    }
}
