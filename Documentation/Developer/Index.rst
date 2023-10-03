.. include:: /Includes.rst.txt


.. _developer:

================
Developer corner
================

Target group: **Developers**, **Integrators**

.. contents:: Table of Contents
   :depth: 2
   :local:


Using the API
=============

The API can be used like described in the :ref:`schema manual
<ext_schema:api>`. Use the :php:`TypeFactory` for instantiating a model type
class:

.. literalinclude:: _MyController.php
   :language: php
   :caption: EXT:my_extension/Classes/Controller/MyController.php


Using the view helpers
======================

The Fluid view helpers can be used like described in the :ref:`schema manual
<ext_schema:view-helpers>`:

.. code-block:: html

   <schema:type.comicStory
      -id="https://example.org/#some-comic-story"
      name="some comic story"
   />

The Fluid namespace :html:`schema` is the same as for the core vocabulary.

